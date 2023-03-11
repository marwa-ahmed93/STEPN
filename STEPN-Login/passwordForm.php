<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_stepn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<html>
    <head>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>
    
<body>
    
    <form method="post" action="handelpasswordForm.php">
     <label for="floatingInputValue d-flex justify-content-center">انشاء كلمه سر جديده</label>
       <input type="password" class="form-control" id="exampleInputPassword1">
        
     <button type="submit" class="switch__button button switch-btn">تسجيل دخول</button>
    </form>
    
    
    </body>
</html>