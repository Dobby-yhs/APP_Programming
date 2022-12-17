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
				</ul>
			</form>
		</nav>
	</header>
	
	<br><br>

	<!-- body_main -->
	<div class="container">
    <h1> 찾으시는 상품 </h1>
		<div class="row" align="center">
    	<?php

	        $host = 'localhost';
        	$user = 'dobbi';
        	$pw = '1234';
        	$dbName = 'project';
        	$mysqli = new mysqli($host, $user, $pw, $dbName);

        	$search = $_POST['search'];

        	$sql = "SELECT * FROM search where search_product like '%$search%'"; 

       		$result = mysqli_query($mysqli, $sql);

        	if($search != '') {
	            while($row = mysqli_fetch_assoc($result)) {
					$search_no = $row['search_no'];
                	$search_product = $row['search_product'];
                	$search_mall = $row['search_mall'];
                	$search_unit = $row['search_unit'];

					
					echo "<img src=/image/search/".$search_no.".png>";
		        	echo "<h4>".$search_product."</h4>";
        			echo "<p> 매장 : ".$search_mall."</p>";
        			echo "<p> 총 수량 : ".$search_unit."</p>";
            	}   
        	}


        	?>
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