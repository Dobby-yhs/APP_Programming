<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM myeongdong where myeongdong_no = 6"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $myeongdong_product = $row['myeongdong_product'];
        $myeongdong_unit = $row['myeongdong_unit'];     
        
    }

    $myObj = new stdClass();

    $myObj->myeongdong_product = $myeongdong_product;
    $myObj->myeongdong_unit = $myeongdong_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>