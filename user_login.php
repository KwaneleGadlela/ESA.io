<?php
if(isset($_POST["submit"])){ 
    //Above is the submit Check

    //Variables to check 
    $position = $_POST["option_to_login"];
    $email = $_POST["email_addr"];
    $pass_word = $_POST["password_field"];

    require_once "conn.php"; // line to join db using connection string

    $sql = "SELECT * FROM user_register WHERE auth = '$position' AND email = '$email' "; 
    $result = mysqli_query($conn, $sql); //query function to get information and return into an object
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC); // converts object received into array for easy reading and accessibility
                                //Argument and constant
    if($user){
        $hashed_password = $user["passwords"];
        if(password_verify($pass_word, $hashed_password)){ 
            // above code checks password. If correct or incorrect

           /* session_start();
            $_SESSION["user"] = "yes"; */

            //the below checks user position before opening correct page
            if($position == "admin"){
                header("location: dashboard.html"); 
                die();
            }
            else if($position == "employee"){
                header("location: form.php"); 
                die();
            }
        }
        else{
            echo '<script>';
            echo 'alert("Incorrect password. Enter correct password.");';
            echo 'window.location.href = "index.html";'; // page redirection line.
            echo '</script>';
            exit();
        }
    }   
    else{
        echo '<script>';
        echo 'alert("Incorrect details. Try again.");';
        echo 'window.location.href = "index.html";'; // page redirection line.
        echo '</script>';
        exit();
    }
}
?>
