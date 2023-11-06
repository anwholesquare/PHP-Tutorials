<?php
    $title = "PHP Condition";
?>


<html>
<head>
    <title><?php echo $title ?></title>
</head>

<body>

    <center> <b> Conditions </b> </center>
<?php 
    $data = rand(1,10);
    print($data . "<br>");

    if ($data % 2 == 0 && $data > 5) {
        echo "The number is even\n";
    } else {
        echo "The number is odd\n";
    }
    echo "<br>";
    if ($data > 5) {
        echo "The number is greater than 5";
    } else if ($data == 5) {
        echo "The number is equal to 5";
    } else {
        echo "The number is less than 5";
    }

    echo "<br>";

    $num1 = 10;
    $num2 = "10";
    if ($num1 == $num2) {
        echo "The numbers are equal";
    } else {
        echo "The numbers are not equal";
    }
?>


</body>
