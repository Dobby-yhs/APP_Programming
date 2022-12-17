<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM ganseok where ganseok_no = 1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $ganseok_product = $row['ganseok_product'];
        $ganseok_unit = $row['ganseok_unit'];    
        
    }

    $myObj = new stdClass();

    $myObj->ganseok_product = $ganseok_product;
    $myObj->ganseok_unit = $ganseok_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>