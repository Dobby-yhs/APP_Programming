<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM jordan where jordan_no = 1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $jordan_name = $row['jordan_name'];
        $jordan_price = $row['jordan_price'];
        $jordan_description = $row['jordan_description'];
        $jordan_unit = $row['jordan_unit'];     
        
    }

    $myObj = new stdClass();

    $myObj->jordan_name = $jordan_name;
    $myObj->jordan_price = $jordan_price;
    $myObj->jordan_description = $jordan_description;
    $myObj->jordan_unit = $jordan_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>