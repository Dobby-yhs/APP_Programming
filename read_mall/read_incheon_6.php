
<?php

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM incheon where incheon_no = 6"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $incheon_product = $row['incheon_product'];
        $incheon_unit = $row['incheon_unit'];     
        
    }

    $myObj = new stdClass();

    $myObj->incheon_product = $incheon_product;
    $myObj->incheon_unit = $incheon_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>