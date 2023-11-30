<?php
    $db = mysqli_connect ("localhost", "root", "", "test");

    if (!$db)
        die ("Error connecting to MySQL database.");
    else {
        echo "Connected to MySQL database.<br>";
    }
    //$insertsql = "INSERT INTO test_table (name, password) VALUES ('Anan', '1234')";
    //$db->query($insertsql);
    $sql = "SELECT * FROM test_table";
    $result = $db->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo $row['name']." ".$row['password']."<br>";
    }    
    mysqli_close ($db);

?>