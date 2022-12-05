<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM trainning where trainning_no = 3"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $trainning_name = $row['trainning_name'];
        $trainning_price = $row['trainning_price'];
        $trainning_description = $row['trainning_description'];
        $trainning_unit = $row['trainning_unit'];    
        
    }

    $myObj = new stdClass();

    $myObj->trainning_name = $trainning_name;
    $myObj->trainning_price = $trainning_price;
    $myObj->trainning_description = $trainning_description;
    $myObj->trainning_unit = $trainning_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>