<?php   

session_start();

 include '../connection.php';



//geting data
$wfirstname = $_POST['wfirstname'];
$wlastname=$_POST['wlastname'];

$wUsername=$_POST['wUsername'];
$wPhone=$_POST['wPhone'];

$birthday=$_POST['birthday'];
$weight=$_POST['weight'];

// $specialties=$_POST['specialties'];
$wCountry=$_POST['wCountry'];

$governorate=$_POST['governorate'];
$city=$_POST['city'];

// $national_id=$_POST['national_id'];

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

$birthday=cleanData($birthday);
$weight=cleanData($weight);

// $specialties=cleanData($specialties);
$wCountry=cleanData($wCountry);

$governorate=cleanData($governorate);
$city=cleanData($city);

// $national_id=cleanData($national_id);
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
//validate birthday
if(empty($birthday) || !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birthday)) 
{
    $errors['birthday'] = "enter valid birthday";
  
}
// validate weight
if (empty($weight) || !filter_var($weight, FILTER_VALIDATE_INT)) {
    $errors['weight'] = "enter valid weight";
    $is_valid=false;
  }

//validate specialties
// if(empty($specialties) || !filter_var($specialties , FILTER_SANITIZE_STRING))
// {
//     $errors['specialties'] = "enter valid specialties";
//     $is_valid=false;
// }
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

// validate national_id
// if (empty($national_id) || !filter_var($national_id, FILTER_VALIDATE_INT)) {
//     $errors['national_id'] = "enter valid weight";
//     $is_valid=false;
//   }

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
    header('location: ../SignUp-UserpaidNormal/SignUp.php');
}

if($is_valid===true)
{
    //insert data
    // $query ="INSERT INTO `normal_user`(`first_name`, `laste-name`, `user_name`, `phone`, 
    // `birthday`, `weight`, `country`, `governorate`, `city`, `national_id`, 
    // `email`, `password`) 
    // VALUES  ('$wfirstname','$wlastname','$wUsername',$wPhone,'$birthday',$weight,
    // '$wCountry','$governorate','$city',$national_id,'$wEmail','$wpassword')
    //    ";

       $query ="INSERT INTO `client`(`firstname`, `lastname`, `username`, `phone`, `birthday`, 
       `weight`,`countery`, `governorate`, `city`, `email`, `password`)
        VALUES('$wfirstname','$wlastname','$wUsername',$wPhone,'$birthday',$weight,
    '$wCountry','$governorate','$city','$wEmail','$wpassword')
     ";

    if($conn->query($query)===true)
    {
      header('location: ../STEPN-Sport & healthy/index.php');  
    
    }
    else
    {
    
        header('location: ../SignUp-Companies/SignUp.php');
    }

}


/*$query ="INSERT INTO `company`(`company_name`, `company_owner`, `company_user`, `phone`,
`woking_time`, `available_services`, `available_specialties`, `countery`, `governorate`, 
`city`, `registraion_number`, `email`, `password`) 
VALUES 
//store data in session
// $_SESSION['wfirstname']=$wfirstname;
// $_SESSION['wlastname']=$wlastname;
// $_SESSION['wUsername']=$wUsername;
// $_SESSION['wPhone']=$wPhone;
// $_SESSION['working_time']=$working_time;
// $_SESSION['services']=$services;

// $_SESSION['specialties']=$specialties;
// $_SESSION['wCountry']=$wCountry;
// $_SESSION['governorate']=$governorate;
// $_SESSION['city']=$city;


// $_SESSION['registration']=$registration;
// $_SESSION['wEmail']=$wEmail;

// $_SESSION['wpassword']=$wpassword;





//query


    
//$query = "INSERT INTO `tasks`(`em_id`, `task_name`, `desc`, `status`, `deadline`)
// VALUES ($emp_id ,'$task_name','$desc','$status','$deadline')
// ";

// $result = $conn->query($query);

// if(isset($_SESSION['wEmail'])){
//   header('location: ../STEPN-hospital/index.php');  
// }

// if ($conn->query($query) === TRUE) {
//     header('location: ../STEPN-Doctor/index.php'); 
    
//   } 
  // else {
  //   echo "Error updating record: " . $conn->error;
  // }



?>