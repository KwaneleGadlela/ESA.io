<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record keeper</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <header class="reg-header">
        <div class="dashlink"><a href="index.html">LOGOUT</a></div>
    </header>
    <section class="data-section">  
        <div class="accordion">
            <form action="process_form.php" method="POST">
                <?php
                // Generate input fields dynamically
                for ($i = 1; $i <= 150; $i++) {
                    echo '
                    <div class="contentBx">
                        <div class="label">Input Data '.$i.'</div>
                        <div class="content">
                            <label class="form-label" for="field_number_'.$i.'">Field number:</label><br>
                            <input class="form-attr" id="field_number_'.$i.'" name="field_number[]" type="number">
                            <br>
                            <label class="form-label" for="date_'.$i.'">Date:</label><br>
                            <input class="auto-date date-field" id="date_'.$i.'" name="date[]" type="date">
                            <br>
                            <label class="form-label" for="last_name_'.$i.'">Last Name:</label><br>
                            <input class="form-attr" id="last_name_'.$i.'" name="last_name[]" type="text">
                            <br>
                            <label class="form-label" for="password_field_'.$i.'">Password:</label><br>
                            <input class="form-attr" id="password_field_'.$i.'" name="password_field[]" type="password">
                            <br>
                            <label class="form-label" for="confirm_password_field_'.$i.'">Confirm Password:</label><br>
                            <input class="form-attr" id="confirm_password_field_'.$i.'" name="confirm_password_field[]" type="password">
                            <br>
                        </div>
                    </div>';
                }
                ?>
                <input class="form-attr btn" type="submit" Value="Submit" name="register">
            </form>
        </div>
    </section>

    <footer class="reg-footer2">
        
    </footer>

    <script src="resources/Javascript/accordion.js"></script>  
    <script src="resources/Javascript/auto_date.js"></script>  <!-- autodate     -->
</body>
</html>
