<?php
    date_default_timezone_set('Asia/Dhaka');
    $title = "PHP Default Functions";
?>


<html>
<head>
    <title><?php echo $title ?></title>
</head>

<body>

    <center> <b> Variables </b> </center>
<?php 
    $maximum = max(2, 3, 4, 5, 6, 7, 8, 9, 10);
    $data = abs(-10.5);
    $data = ceil(-10.5);
    $data = floor(-10.5);
    $data = round(-10.56655555555555555, 2);
    $data = rand(1, 100);
    var_dump ($data);
    $data = sqrt(100);
    $data = pow(2, 3);
    $data = strlen("Hello World");
    $data = str_word_count("Hello World");
    $data = strrev("Hello World");
    $data = strpos("Hello World", "World");
    $data = str_replace("World", "Anan", "Hello World");
    $data = substr("Hello World", 6);
    $data = substr("Hello World", 6, 3);
    $data = date("d/m/Y");
    $data = date("d/m/Y h:i:s A");
    
    $data = date("d/m/Y h:i:s A", time() + 86400);
    $data = date("d/m/Y h:i:s A", strtotime("+1 day"));
    $data = date("d/m/Y h:i:s A", strtotime("+1 week"));
    $data = date("d/m/Y h:i:s A", strtotime("+1 week 3 days 7 hours 5 seconds"));
    $data = date("d/m/Y h:i:s A", strtotime("next Sunday"));
    $data = date("d/m/Y h:i:s A", strtotime("last Sunday"));
    $data = date("d/m/Y h:i:s A", strtotime("last Sunday +1 week"));
    $data = date("d/m/Y h:i:s A", strtotime("last Sunday +1 week 3 days"));
    $data = date("d/m/Y h:i:s A", strtotime("last Sunday +1 week 3 days 7 hours"));
    
?>


</body>
