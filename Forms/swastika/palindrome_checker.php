<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    


   

?>

<html>
    <head>
        <title>Assignment</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <?php include 'profile_section.php';?>
            <div class="description">
            <?php 
                

                if (isset($_POST["palindrome"])) {
                    $palindrome = $_POST["palindrome"];
                }else {
                    $palindrome = "";
                }
                
                function is_valid_string($str) {
 
                    if (empty(trim($str))) {
                        return false;
                    }

                    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $str)) {
                        return false;
                    }
                    return true;
                }

                function validate_palindrome($str) {
                    
                    $cleaned_str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));

                    $reversed_str = strrev($cleaned_str);

                    return $cleaned_str === $reversed_str;
                }

                if (!is_valid_string($palindrome)) {
                    echo '<p style="display:inline;">Invalid input. Please go back and insert a valid string. </p><a href= "index.php"><input type="submit" value="Go Back"></a>';
                }else {
                    if (validate_palindrome($palindrome)) {
                        echo "<p style='display:inline;'> $palindrome is a palindrome. </p><a href= 'index.php'><input type='submit' value='Go Back'></a>";
                    }else {
                        echo "<p style='display:inline;'> $palindrome is not a palindrome. </p><a href= 'index.php'><input type='submit' value='Go Back'></a>";
                    }
                }
            ?>

            </div>
           
    </body>
</html>