<?php
 session_start();
 
//connecting py database
include '../connection.php';

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "my_stepn";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

//geting data

$password=$_POST['password'];

//clean data
function cleanData($input){

    $input = htmlspecialchars($input);
    $input = trim( $input);
   return  $input;
   }

// call function

$password = cleanData($password );
 $_SESSION['email'];
//connection mysql php  
$query = "UPDATE `client` SET `password`='$password'
WHERE email='$email'
";
$result = $conn->query($query);
if ($result->num_rows > 0){

    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo $row['email']."".$row['password'];
    }
  } else {
    echo "0 results";
  }
  $conn->close(); 



//validation
$errors=[];
$valid=true;

//if($result->num_rows == 0 && $email !="" && $password !=""){
//  $errors['data'] = "Not valid data";
//  $valid=false;
//}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $errors['email']=("Not a valid email address");
    $valid=false;
  }

 if($password=" " && !filter_var($password, 
 FILTER_VALIDATE_REGEXP,
 array( "options"=> array( "regexp" => "/.{6,25}/"))
))
{

    $errors['password']="Not Valid password";
    $valid=false;
}
$_SESSION['errors']=$errors;
if(isset($errors)){
    header('location: ../STEPN-Login/index.php');
}
if($valid===true){
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location: ../STEPN-Index/index.php');  
}



//if(!filter_var($password, 
//   FILTER_VALIDATE_REGEXP,
//   array( "options"=> array( "regexp" => "/.^[a-z]{3,9}$/"))));



?>