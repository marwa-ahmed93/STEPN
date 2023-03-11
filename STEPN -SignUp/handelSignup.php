<?php   

session_start();

 include '../connection.php';



//geting data
$wfirstname =$_POST['wfirstname'];
$wlastname=$_POST['wlastname'];

$wUsername=$_POST['wUsername'];
$wPhone=$_POST['wPhone'];


$wCountry=$_POST['wCountry'];

$governorate=$_POST['governorate'];
$city=$_POST['city'];

$registration=$_POST['registration'];

$wEmail=$_POST['wEmail'];
$wpassword=$_POST['wpassword'];


//clean data
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
$wfirstname=cleanData($wfirstname);
$wlastname=cleanData($wlastname);

$wUsername=cleanData($wUsername);
$wPhone=cleanData($wPhone);

$wCountry=cleanData($wCountry);

$governorate=cleanData($governorate);
$city=cleanData($city);

$wEmail=cleanData($wEmail);

$wpassword=cleanData($wpassword);

//validate data
$errors=[];
$is_valid=true;

//validate name
if(empty($wfirstname) || !filter_var($wfirstname , FILTER_SANITIZE_STRING))
{
    $errors['wfirstname'] = "enter valid firstname";
    $is_valid=false;
}

if(empty($wlastname) || !filter_var($wlastname , FILTER_SANITIZE_STRING))
{
    $errors['wlastname'] = "enter valid lastname";
    $is_valid=false;
}
if(empty($wUsername) || !filter_var($wUsername , FILTER_SANITIZE_STRING))
{
    $errors['wUsername'] = "enter valid Username";
    $is_valid=false;
}
//validate phone 
if(empty($wPhone) || !preg_match("/^(01)[0-9]{9}$/", $wPhone))
{
    $errors['wPhone'] = "enter valid phone";
    $is_valid=false;
}


//validate wCountry
if(empty($wCountry) || !filter_var($wCountry , FILTER_SANITIZE_STRING))
{
    $errors['wCountry'] = "enter valid Country";
    $is_valid=false;
}
//validate governorate
if(empty($governorate) || !filter_var($governorate , FILTER_SANITIZE_STRING))
{
    $errors['governorate'] = "enter valid governorate";
    $is_valid=false;
}
//validate city
if(empty($city) || !filter_var($city , FILTER_SANITIZE_STRING))
{
    $errors['city'] = "enter valid city";
    $is_valid=false;
}
//validate email
if(empty($wEmail) || !filter_var($wEmail , FILTER_VALIDATE_EMAIL))
{
    $errors['wEmail'] = "enter valid email";
    $is_valid=false;
}

//validate password
if(empty($wpassword) || !preg_match("/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/", $wpassword))
{
    $errors['wpassword'] = "enter valid password";
    $is_valid=false;
}


$_SESSION['errors']=$errors;

if(isset($_SESSION['errors']))
{
    header('location: ../STEPN -SignUp/SignUp.php');
}


if($is_valid===true)
{
    //insert data
    $query ="INSERT INTO `my_client`(`first_name`, `last_name`, `user_name`, `phone`, `country`, `governorate`, `city`, `registration`, `email`, `password`) 
    VALUES('$wfirstname','$wlastname','$wUsername',$wPhone,
    '$wCountry','$governorate','$city',$registration,'$wEmail','$wpassword')
       ";

    if($conn->query($query)===true)
    {

        header('location: ../STEPN-Index/index.php'); 
    
    }
    else
    {
      header('location: ../STEPN -SignUp/SignUp.php');
    }
}











?>