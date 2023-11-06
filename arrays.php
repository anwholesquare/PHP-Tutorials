<?php
    $title = "PHP Arrays";
    echo "$title<br>";
    $colors = array("red", "green", "blue", "yellow");
    var_dump($colors);
    echo"<br>";
    $colors[0] = "cyan";
    array_push($colors, "magenta");
    array_push($colors, "black");
    array_pop($colors);
    unset($colors[1]); // remove the item at index 1
    $rindex = array_search("blue", $colors); // remove the item by searching
    if ($rindex != null) {
        unset($colors[$rindex]);
    }
    var_dump($colors);
    echo"<br>";
    

    for($x = 0; $x < count($colors); $x++) {
        echo "$colors[$x]<br>";
    }

    foreach ($colors as $value) {
        echo "$value<br>";
    }

    $fruits = array (
        "name" => "Apple",
        "colors" => $colors 
    );
    var_dump($fruits);
?>