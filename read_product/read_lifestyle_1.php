<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM lifestyle where lifestyle_no = 1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $lifestyle_name = $row['lifestyle_name'];
        $lifestyle_price = $row['lifestyle_price'];
        $lifestyle_description = $row['lifestyle_description'];
        $lifestyle_unit = $row['lifestyle_unit'];
        
    }

    $myObj = new stdClass();

    $myObj->lifestyle_name = $lifestyle_name;
    $myObj->lifestyle_price = $lifestyle_price;
    $myObj->lifestyle_description = $lifestyle_description;
    $myObj->lifestyle_unit = $lifestyle_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>