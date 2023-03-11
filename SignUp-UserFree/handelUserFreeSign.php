<?php   

session_start();

 include '../connection.php';



//geting data
$wfirstname = $_POST['wfirstname'];
$wlastname=$_POST['wlastname'];

$wUsername=$_POST['wUsername'];
$wPhone=$_POST['wPhone'];

$birthday=$_POST['birthday'];
$weight =$_POST['weight'];


$wCountry=$_POST['wCountry'];

$governorate=$_POST['governorate'];
$city=$_POST['city'];

$national_id=$_POST['national_id '];
$gender=$_POST['gender'];
$social_status=$_POST['social_status'];

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

$wCountry=cleanData($wCountry);

$governorate=cleanData($governorate);
$city=cleanData($city);

$national_id=cleanData($national_id);
$gender=cleanData($gender);
$social_status=cleanData($social_status);
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
if (empty($national_id) || !filter_var($national_id, FILTER_VALIDATE_INT)) {
  $errors['national_id'] = "enter valid weight";
  $is_valid=false;
}
//validate gender
if(empty($gender) || !filter_var($gender , FILTER_SANITIZE_STRING))
{
    $errors['gender'] = "enter valid gender";
    $is_valid=false;
}

//validate gender
if(empty($social_status) || !filter_var($social_status , FILTER_SANITIZE_STRING))
{
    $errors['social_status'] = "enter valid gender";
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
    header('location: ../SignUp-UserFreeSign/SignUp.php');
}

if($is_valid===true)
{
    //insert data
    $query ="INSERT INTO `new_user`(`first_name`, `laste-name`, `user_name`, `phone`, `birthday`,
     `weight`, `country`, `governorate`, `city`, `national_id`, `gender`, `social_status`, `email`, `password`)
     VALUES ('$wfirstname','$wlastname','$wUsername',$wPhone,'$birthday',$weight,
 '$wCountry','$governorate','$city',$national_id,'$gender','$social_status','$wEmail','$wpassword')
    ";

    if($conn->query($query)===true)
    {
    header('location: ../STEPN-hospital/index.php');  
    
    }
    else
    {
    
      header('location: ../SignUp-UserFreeSign/SignUp.php');
    }

}

//store data in session
// $_SESSION['wfirstname']=$wfirstname;
// $_SESSION['wlastname']=$wlastname;
// $_SESSION['wUsername']=$wUsername;
// $_SESSION['wPhone']=$wPhone;
// $_SESSION['working_time']=$birthday;
// $_SESSION['services']=$weight;


// $_SESSION['wCountry']=$wCountry;
// $_SESSION['governorate']=$governorate;
// $_SESSION['city']=$city;


// $_SESSION['registration']=$national_id;
// $_SESSION['registration']=$gender;
// $_SESSION['wEmail']=$wEmail;

// $_SESSION['wpassword']=$wpassword;


//query

// $query ="INSERT INTO `new_user`(`first_name`, `laste-name`, 
// `user_name`, `phone`, `birthday`, `weight`, `country`, `governorate`, `city`,
//  `national_id`, `gender`, `social_status`, `email`, `password`)
//  VALUES ('$wfirstname','$wlastname','$wUsername',$wPhone,'$birthday',$weight,
//  '$wCountry','$governorate','$city',$national_id,'$gender','$wEmail','$wpassword')
//     ";
    
// //$query = "INSERT INTO `tasks`(`em_id`, `task_name`, `desc`, `status`, `deadline`)
// // VALUES ($emp_id ,'$task_name','$desc','$status','$deadline')
// // ";

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