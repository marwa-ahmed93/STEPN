<?php

function modifyInput($data){

    $data=htmlspecialchars($data);
    $data= trim($data);  //remove extra space

    return   $data;

}


function validateInput($email,$age,$userLink){
    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL == false)) {
        echo  "is nat valid email address"."<br>";
    
    }
    
    
    if (empty($age) || filter_var($age, FILTER_VALIDATE_EMAIL == false)) {
        echo  "is nat valid number"."<br>";
    
    }
    
    
    if (empty($userLink) || filter_var($userLink, FILTER_VALIDATE_EMAIL == false)) {
        echo  "is nat valid userLink"."<br>";
    
    }
}




?>