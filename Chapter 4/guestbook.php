<?php
    $sender=$_GET["name"];
    $message=$_GET["message"];

    if($sender=="" || $message==""){
        echo "You didn't give all required information!";
    }
    else{
        echo $sender.": ".$message;
    }
?>