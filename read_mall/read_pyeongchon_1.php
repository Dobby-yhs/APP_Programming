<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM pyeongchon where pyeongchon_no = 1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $pyeongchon_product = $row['pyeongchon_product']
        $pyeongchon_unit = $row['pyeongchon_unit']     
        
    }

    $myObj = new stdClass();

    $myObj->pyeongchon_product = $pyeongchon_product;
    $myObj->pyeongchon_unit = $pyeongchon_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>