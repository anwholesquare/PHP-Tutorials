<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (!isset($_POST['prime']) || $_POST['prime'] == "" || $_POST['prime'] == null || is_numeric($_POST['prime']) == false || $_POST['prime'] <= 0) {
        
            header('Location: index.php');
            exit();
        
    }
?>
<html>
    <head>
        <title>20210104006 Prime Checker</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <div id="bg">
            </div> 

            <img id= "account" src="https://lh3.googleusercontent.com/a-/AOh14GjuR8M9BgPuNOPFggzL3c8bYu5HTXGuhrpYcav0cg?height=180&width=180" alt="logo" class="logo">
            <div class="info">

                <h1> Khandoker Kafi Anan </h1>
                <div class="info1">
                    
                    <b> Prime Checker </b>
                    <br><br>
                    <?php
                        echo "The number is ".$_POST['prime'].". ";
                        function check_prime($num)
                        {
                            if ($num == 1)
                                return false;
                            for ($i = 2; $i <= $num/2; $i++)
                            {
                                if ($num % $i == 0)
                                return false;
                            }
                            return true;
                        }

                        if (isset($_POST['submit']) && isset($_POST['prime'])) {
                            if (is_int((int)$_POST['prime'])) {
                                if (check_prime($_POST['prime']))
                                    echo "The number is prime.";
                                else
                                    echo "The number is not prime.";
                            }else {
                                echo "Input Number is not an integer.";
                            }
                        }else {
                            echo "Number is not set.";
                        }
                    ?>
                </div>
            </div>  


    </body>
</html>