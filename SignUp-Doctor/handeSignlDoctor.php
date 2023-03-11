<?php   

session_start();

 include '../connection.php';


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "my_stepn";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//geting data
$wfirstname = $_POST['wfirstname'];
$wlastname=$_POST['wlastname'];

$wUsername=$_POST['wUsername'];
$wPhone=$_POST['wPhone'];

$working_time=$_POST['working_time'];
$services=$_POST['services'];

$specialties=$_POST['specialties'];
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

$working_time=cleanData($working_time);
$services=cleanData($services);

$specialties=cleanData($specialties);
$wCountry=cleanData($wCountry);

$governorate=cleanData($governorate);
$city=cleanData($city);

$registration=cleanData($registration);
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
//validate working_time
if(empty($working_time) || !filter_var($working_time , FILTER_SANITIZE_STRING))
{
    $errors['working_time'] = "enter valid working_time";
    $is_valid=false;
}
//validate services
if(empty($services) || !filter_var($services , FILTER_SANITIZE_STRING))
{
    $errors['services'] = "enter valid services";
    $is_valid=false;
}

//validate specialties
if(empty($specialties) || !filter_var($specialties , FILTER_SANITIZE_STRING))
{
    $errors['specialties'] = "enter valid specialties";
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
    header('location: ../SignUp-Doctor/SignUp.php');
}


if($is_valid===true)
{
    //insert data
    // $query ="INSERT INTO `doctor`(`clinic_name`, `doctor_name`, `user_name`, `phone`, `working_time`,
    //  `available_services`
    //  `available_specialies`, `country`, `governorate`, `city`, `registration_number`, `email`, `password`)
    // VALUES ('$wfirstname','$wlastname','$wUsername',$wPhone,'$working_time','$services','$specialties',
    // '$wCountry','$governorate','$city',$registration,'$wEmail','$wpassword')
    //    ";

$query = "INSERT INTO `client`(`firstname`, `lastname`, `username`, `phone`,
`woking_time`, `available_services`, `available_specialties`, `countery`, 
`governorate`, `city`, `registraion_number`, `email`, `password`)
VALUES  ('$wfirstname','$wlastname','$wUsername',$wPhone,'$working_time','$services','$specialties',
'$wCountry','$governorate','$city',$registration,'$wEmail','$wpassword')
";

    if($conn->query($query)===true)
    {
      header('location: ../STEPN-loginDoctor/index.php'); 
    }
    else
    {
      header('location: ../SignUp-Doctor/SignUp.php');
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



