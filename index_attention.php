<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
    <link rel="stylesheet" href="css/dropbar.css">
  	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
	<title>수량 파악 사이트</title>

</head>
<body>
	<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="index_ad.html"><img src="img/logo.png" width="80px" height="50px" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav">
			<form action="index_search.php" method="post" enctype="multipart/form-data">
				<ul class="cd-main-nav__list js-signin-modal-trigger">
					<li><input id="search" name="search" type="text" placeholder="Search.." style="width: 300px; height:30px"> <button type="submit" class="btn btn-secondary">검색</button></li>
					<li></li>
					<li class="dropdown">
						<a class="dropbtn cd-main-nav__item cd-main-nav__item--signup" onclick="myFunction()"> 상품 </a>
						<div id="myDropdown" class="dropdown-content">
							<a href="/ad_product/product_lifestyle.html"> 라이프스타일 </a>
							<a href="/ad_product/product_jordan.html"> 조던 </a>
							<a href="/ad_product/product_running.html"> 러닝 </a>
							<a href="/ad_product/product_trainning.html"> 트레이닝 </a>
						</div>
					</li>
					<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="./index_mall.html">매장</a></li>
					<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="./index_newproduct.html">출시 예정 상품</a></li>
					<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="./index_attention.php">관심 상품</a></li>
				</ul>
			</form>
		</nav>
	</header>
	
	<br><br>

	<!-- body_main -->
	<div class="container">
        <h1>관심 상품</h1>
		<br>
		<div class="row" align="center">
		<!-- <form action="attention_delete.php" method="post"> -->
            <?php

	        	$host = 'localhost';
        		$user = 'dobbi';
        		$pw = '1234';
        		$dbName = 'project';
        		$mysqli = new mysqli($host, $user, $pw, $dbName);

				if (mysqli_connect_error()) {
					exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
				}

        		$sql = "SELECT * FROM attention where attention_pick = 'O'";

       			$result = mysqli_query($mysqli, $sql);
				
				$list = '';
	        	while($row = mysqli_fetch_assoc($result)) {
					$attention_no = $row['attention_no'];
					$attention_name = $row['attention_name'];
               		$attention_price = $row['attention_price'];
               		$attention_print = $row['attention_print'];

					$list = $list."<img src=/image/new_shoes/".$attention_no.".png> <h4>".$attention_name."</h4> <p> 가격 : ".$attention_price."</p> <p> 색상 : ".$attention_print."</p><br>";
					
					// echo "<img src=/image/new_shoes/".$attention_no.".png>";
		       		// echo "<h4>".$attention_name."</h4>";
        			// echo "<p> 가격 : ".$attention_price."</p>";
        			// echo "<p> 색상 : ".$attention_print."</p><br>";
           		}   

				$delete_link = '';

				if(isset($row['attention_no'])) {
					$filtered_id = mysqli_real_escape_string($mysqli, $row['attention_no']);
					$sql = "SELECT * FROM attention where attention_NO = {$filtered_id}";
					$result = mysqli_query($mysqli, $sql);
					$row = mysqli_fetch_assoc($result);
					$delete_link = '
						<form action="attention_delete.php" method="post">
							<input type="hidden" name="product" value="'.$row['attention_no'].'">
							<input type="submit" class="btn btn-warrning" value="관심 상품 삭제하기">
						</form>
					';

					// https://nevertrustbrutus.tistory.com/331
				}

        	?>
		<!-- </form> -->

		<?=$list?>
		<?=$delete_link?>

		</div>
	</div>

	<br><br>
	
	<footer class="container">
		<hr>
		<p>
			&copy; 대표 : 윤해상    고유 번호 : 20191002    메일 : jjj1299@sungkyul.ac.kr
		</p>
	</footer>
    <script src="js/dropdown.js"></script>
	<script src="js/placeholders.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
