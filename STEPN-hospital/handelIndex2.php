<?php


session_start();

include '../connection.php';

//geting data
$yourName=$_POST['yourName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

//clean data
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
$yourName=cleanData($yourName);
$email=cleanData($email);
$phone=cleanData($phone);
$message=cleanData($message);

//validate data
$errors=[];
$is_valid=true;

//validate name
if(empty($yourName) || !filter_var($yourName , FILTER_SANITIZE_STRING))
{
    $errors['yourName'] = "enter valid Name";
    $is_valid=false;
}

//validate email
if(empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL))
{
    $errors['email'] = "enter valid email";
    $is_valid=false;
}

//validate phone
// if(empty($phone) || !filter_var($phone , FILTER_SANITIZE_INT))
// {
//     $errors['phone'] = "enter valid phone Number";
//     $is_valid=false;
// }
//validate phone 
if(empty($phone) || !preg_match("/^(01)[0-9]{9}$/", $phone))
{
    $errors['phone'] = "enter valid phone";
    $is_valid=false;
}

//validate message
if(empty($message) || !filter_var($message , FILTER_SANITIZE_STRING))
{
    $errors['message'] = "enter valid message";
    $is_valid=false;
}


$_SESSION['errors']=$errors;

if(isset($_SESSION['errors']))
{
    header('location: ../STEPN-hospital/index.php');
}

if($is_valid===true)
{
   //insert data
   $query ="INSERT INTO `hospital_complaints`(`name`, `email`, `phone`, `message`) VALUES
    ('$yourName','$email',$phone,'$message')
     ";
    
    if($conn->query($query)===true)
    {
        // echo "<h2> thanks , your requst submited .</h2>";
        exit();
    //   header('location: home.php'); 
        
    
    }
    else
    {
    
        header('location: ../STEPN-hospital/index.php');
    }

}