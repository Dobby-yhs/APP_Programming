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

    $product = $_POST['product'];
    $product = addslashes($product);

    $sql = "UPDATE attention SET attention_pick = 'X' where attention_no like '%$product'";
    
    if(mysqli_query($mysqli, $sql)){ 
        echo '<script>alert("해당 상품을 관심 상품에서 삭제하셨습니다.")</script>'; 
    }else{ 
        echo '<script>alert("해당 상품 삭제 실패하셨습니다.")</script>';
    }

    mysqli_close($mysqli);
    

?>

<script>
    location.href = "index_attention.php";   
</script>
</html>