<?php   
// session_start();

// include '../connection.php';

// //geting data
// $yourName=$_POST['yourName'];

// $email=$_POST['email'];

// $subject=$_POST['subject'];

// $message=$_POST['message'];

// //clean data
// function cleanData($input)
// {
//     $input=htmlspecialchars($input);
//     $input=trim($input);
//     return $input;
// }

// $yourName=cleanData($yourName);

// $email=cleanData($email);

// $subject=cleanData($subject);

// $message=cleanData($message);

// //validate data
// $errors=[];
// $is_valid=true;


// //validate name
// if(empty($yourName) || !filter_var($yourName , FILTER_SANITIZE_STRING))
// {
//     $errors['yourName'] = "enter valid yourName";
//     $is_valid=false;
// }

// //validate email
// if(empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL))
// {
//     $errors['email'] = "enter valid email";
//     $is_valid=false;
// }

// // validate subject
// if(empty($subject) || !filter_var($subject , FILTER_SANITIZE_STRING))
// {
//     $errors['subject'] = "enter valid lastname";
//     $is_valid=false;
// }


// // validate message
// if(empty($message) || !filter_var($message , FILTER_SANITIZE_STRING))
// {
//     $errors['message'] = "enter valid lastname";
//     $is_valid=false;
// }

// $_SESSION['errors']=$errors;

// if(isset($_SESSION['errors']))
// {
//     header('location: ../STEPN-Index/index.php');
// }

// if($is_valid===true)
// {
//     //insert data
//     $query ="INSERT INTO `complaints`(`your_name`, `email`, `subject`, `message`)
//      VALUES  ('$yourName','$email','$subject','$message')
//        ";

//     if($conn->query($query)===true)
//     {
//      echo "<h1>Thank you<h1/>";
//     //   header('location: ../STEPN-hospital/index.php'); 
//     }
//     else
//     {
//         echo "Sorry";
//         // header('location: ../STEPN-Index/index.php');
//     }

// }


session_start();

include '../connection.php';

//geting data
$yourName = $_POST['yourName'];
$email=$_POST['email'];

$subject=$_POST['subject'];
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
$subject=cleanData($subject);
$message=cleanData($message);

//validate data
$errors=[];
$is_valid=true;

//validate name
if(empty($yourName) || !filter_var($yourName , FILTER_SANITIZE_STRING))
{
    $errors['yourName'] = "enter valid firstname";
    $is_valid=false;
}

//validate email
if(empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL))
{
    $errors['email'] = "enter valid email";
    $is_valid=false;
}

//validate subject
if(empty($subject) || !filter_var($subject , FILTER_SANITIZE_STRING))
{
    $errors['subject'] = "enter valid working_time";
    $is_valid=false;
}

//validate subject
if(empty($message) || !filter_var($message , FILTER_SANITIZE_STRING))
{
    $errors['message'] = "enter valid working_time";
    $is_valid=false;
}


$_SESSION['errors']=$errors;

if(isset($_SESSION['errors']))
{
    header('location: ../STEPN-Index/index.php');
}

if($is_valid===true)
{
   //insert data
   $query ="INSERT INTO `complaints`(`your_name`, `email`, `subject`, `message`)
   VALUES  ('$yourName','$email','$subject','$message')
     ";
    
    if($conn->query($query)===true)
    {
        // echo "<h2> thanks , your requst submited .</h2>";
        exit();
    //   header('location: home.php'); 
        
    
    }
    else
    {
    
        header('location: ../STEPN-Index/index.php');
    }

}







?>