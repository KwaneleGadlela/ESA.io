<?php
    $hostname= "localhost";
    $username= "root";
    $password= "";
    $dbname= "esa";

    $conn = mysqli_connect($hostname, $username, $password, $dbname); //conneciton string
    
    //check errors on connection using die method
    if(!$conn){
        die("somthing went wrong in connecting to Database");
    } 
?>