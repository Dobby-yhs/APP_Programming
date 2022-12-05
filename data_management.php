<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $search = $_POST['search'];

    $sql = "SELECT * FROM search where search_product='".$search."'"; 
    
    
    
    $result = mysqli_query($mysqli, $sql);

    if($search != '') {
        while($row = mysqli_fetch_assoc($result)) {
            $search_product = $row['search_product'];
            $serach_mall = $row['search_mall'];
            $serach_unit = $row['search_unit'];
        }   
    }    

    $myObj = new stdClass();

    $myObj->search_product = $search_product;
    $myObj->serach_mall = $serach_mall;
    $myObj->serach_unit = $serach_unit;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>

<script>
    location.href = "index_search.html";   
</script>
</html>