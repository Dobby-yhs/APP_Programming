<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $color = $POST['color'];

    $sql = "insert into attention (attention_name, attention_color) values('조크 덩크 로우', '".$color."')";
    
    if($mysqli->query($sql)) {
        echo '<script>alert("관심 상품에 등록했습니다.")</script>';
    } else{
        echo '<script>alert("관심 상품 등록이 실패하였습니다.")</script>'
    }

    mysqli_close($mysqli);

?>

<script>
    location.href = "index_newproduct.html";   
</script>
</html>