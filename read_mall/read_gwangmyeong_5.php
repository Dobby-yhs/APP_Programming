<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM gwangmyeong where gwangmyeong_no = 5"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $gwangmyeong_product = $row['gwangmyeong_product'];
        $gwangmyeong_unit = $row['gwangmyeong_unit'];       
        
    }

    $myObj = new stdClass();

    $myObj->gwangmyeong_product = $gwangmyeong_product;
    $myObj->gwangmyeong_unit = $gwangmyeong_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>