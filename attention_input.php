<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'dobbi';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    if (mysqli_connect_error()) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }

    $color = $_GET['color'];
    $color = addslashes($color);

    $sql = "UPDATE attention SET attention_pick = 'O' where attention_color like '%$color'";
    
    if(mysqli_query($mysqli, $sql)){ 
        echo '<script>alert("관심 상품에 등록하셨습니다.")</script>'; 
    }else{ 
        echo '<script>alert("관심 상품 등록 실패하셨습니다.")</script>';
    }

    mysqli_close($mysqli);
    

?>

<script>
    location.href = "index_newproduct.html";   
</script>
</html>