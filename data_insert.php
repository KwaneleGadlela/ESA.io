<?php
    if(isset($_POST["register"])){ 
        $email = $_POST["email_addr"];
        $name1 = $_POST["first_name"];
        $name2 = $_POST["last_name"];
        $position = $_POST["option_to_login"];
        $pass_word = $_POST["password_field"];

        require_once "conn.php";

        $sql = "INSERT INTO user_register(email, first_name, second_name,  auth, passwords) VALUES(?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepare_stmt = mysqli_stmt_prepare($stmt, $sql);

            //checks if return from the stmt function is true or false
            if($prepare_stmt){
                mysqli_stmt_bind_param($stmt, 'sssss', $email, $name1, $name2, $position, $hashed_password);
                mysqli_stmt_execute($stmt);
                
                //Alerts that registration was successful then redirects to a different page using echo with JS
                echo'<script>';
                echo 'alert("You have successfuly registered.");';
                echo 'window.location.href = "index.html";';
                echo '</script>';
                exit();
            }
            else{
                die("Something went wrong");
            }
    }  
?>
