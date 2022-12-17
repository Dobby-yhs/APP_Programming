<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM running where running_no = 5"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $running_name = $row['running_name'];
        $running_price = $row['running_price'];
        $running_description = $row['running_description'];
        $running_unit = $row['running_unit'];     
        
    }

    $myObj = new stdClass();

    $myObj->running_name = $running_name;
    $myObj->running_price = $running_price;
    $myObj->running_description = $running_description;
    $myObj->running_unit = $running_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>