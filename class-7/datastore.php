<?php
    // echo "<pre>";
    //     print_r($_REQUEST);
    // echo "</pre>";

    $name = strlen(trim($_REQUEST["Name"])); 
    $emailadd = strlen(trim($_REQUEST["Email"])); 
    $password = strlen(trim($_REQUEST["Password"]));
    $address= strlen(trim($_REQUEST["Address"]));


   if($name > 50){
        echo "Name is bigger";
   }else{
        echo "Good Job";
   }
   echo "<br>";


   if($emailadd > 70){
        echo "Email Address is to long";
    }else{
        echo "Valid Email";
    }
    echo "<br>";


    if($password > 7){
        echo "Pass Is too long";
    }else{
        echo "Correct password";
    }
    echo "<br>";

    if($address > 300){
        echo "OUT OF STORE";
    }else{
        echo "Valid Address";
    }
    echo "<br>";

?>