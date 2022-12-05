<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM seoul where seoul_no = 4"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $seoul_product = $row['seoul_product']
        $seoul_unit = $row['seoul_unit']     
        
    }

    $myObj = new stdClass();

    $myObj->seoul_product = $seoul_product;
    $myObj->seoul_unit = $seoul_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>