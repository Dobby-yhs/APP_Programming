
<!-- <meta charset="utf-8"> -->


	<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$region = $_POST["region"];
        $mall = $_POST["mall"];

		$sql = "select * from store where store_mall='$mall';

        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($result);
		
		
		mysqli_close($mysqli);
	  
	?>

    <html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
    <link rel="stylesheet" href="css/dropbar.css">
    <link rel="stylesheet" href="css/selectbox.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	

	<title>수량 파악 사이트</title>

</head>
<body>
	<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="img/logo.png" width="80px" height="50px" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				<!-- inser more links here -->
				<li><input id="search" name="search" type="text" placeholder="Search.." style="width: 300px; height:30px"> <button class="btn btn-secondary">검색</button></li>
                <li class="dropdown">
                    <button class="dropbtn cd-main-nav__item cd-main-nav__item--signup" onclick="myFunction()"> 상품 </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#"> 라이프스타일 </a>
                        <a href="#"> 조던 </a>
                        <a href="#"> 러닝 </a>
                        <a href="#"> 워킹 </a>
                        <a href="#"> 트레이닝 </a>
                        <a href="#"> 샌들 & 슬리퍼 </a>
                    </div>
                </li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="#0">매장</a></li>
                <li><a class="cd-main-nav__item cd-main-nav__item--signup" href="#0">출시 예정 상품</a></li>
			</ul>
		</nav>
	</header>
	
	<br><br>

	<!-- body_main -->
    <div class="box">
	<select name="region" onchange="categoryChange(this)">
        <option>시/도 선택</option>
        <option value="seoul">서울</option>
        <option value="incheon">인천</option>
        <option value="daejeon">대전</option>
        <option value="gawngju">광주</option>
        <option value="daegu">대구</option>
        <option value="ulsan">울산</option>
        <option value="busan">부산</option>
        <option value="gyeonggi">경기도</option>
        <option value="gangwon">강원도</option>
        <option value="choungbuck">충청북도</option>
        <option value="choungnam">충청남도</option>
        <option value="jeonlabuck">전라북도</option>
        <option value="jeonlanam">전라남도</option>
        <option value="gyeongsangbuck">경상북도</option>
        <option value="gyeongsangnam">경상남도</option>
    </select>
    <select id="mall" name="mall">
        <option>매장 선택</option>
    </select>
    <input type="submit" class="btn btn-secondary" value="검색">
    </div>

    <script>
        function categoryChange(e) {
            var region_seoul = ["조크 롯데 평촌","조크 롯데 명동","조크 신세계 명동","조크 서울","조크 바이 롯데 서울역"];
            var region_incheon = ["조크 간석","조크 롯데 인천터미널","조크 만수","조크 부평","조크 LF스퀘어 인천"];
            var region_daejeon = ["조크 갤러리아 타임월드","조크 탄방로데오","조크 롯데 대전","조크 대전 세이","조크 유성"];
            var region_gawngju = ["조크 세정 광주","조크 신세계 광주","조크 롯데 광주 월드컵","조크 롯데 광주 수완","조크 롯데 광주"];
            var region_daegu =  ["조크 롯데 대구역","조크 동성로","조크 현대 대구","조크 신세계 대구","조크 현대 동대구"];
            var region_ulsan =  ["조크 현대 울산","조크 롯데 울산","조크 업스퀘어 울산","조크 울산 무거","조크 모다 울산"];
            var region_busan = ["조크 롯데 서면","조크 서면 2","조크 서면 제일","조크 범일","조크 현대 부산"];
            var region_gyeonggi = ["조크 이천","조크 광주 경기","조크 팩토리 스토어 여주","조크 용인","조크 신흥"];
            var region_gangwon = ["조크 원주","조크 동해","조크 AK 원주","조크 단구 원주"];
            var region_choungbuck = ["조크 충주","초크 현대 충청","조크 유나이트 청주","조크 제천"];
            var region_choungnam = ["조크 롯데 부여","조크 AK 세종","조크 아산","조크 모다 천안","조크 갤러리아 센터시티"];
            var region_jeonlabuck = ["조크 롯데 전주","조크 롯데 군산"];
            var region_jeonlanam = ["조크 순천","조크 LF 스퀘어 광양","조크 롯데 목포"];
            var region_gyeongsangbuck = ["조크 점촌","조크 구미 중앙","조크 롯데 포항"];
            var region_gyeongsangnam = ["조크 갤러리아 진주","조크 롯데 진주","조크 모다 진주","조크 롯데 마산","조크 시티세븐 창원"];

            var target = document.getElementById("mall");

            if(e.value == "seoul")var city = region_seoul;
            else if(e.value == "incheon")var city = region_incheon;
            else if(e.value == "daejeon")var city = region_daejeon;
            else if(e.value == "gawngju")var city = region_gawngju;
            else if(e.value == "daegu")var city = region_daegu;
            else if(e.value == "ulsan")var city = region_ulsan;
            else if(e.value == "busan")var city = region_busan;
            else if(e.value == "gyeonggi")var city = region_gyeonggi;
            else if(e.value == "gangwon")var city = region_gangwon;
            else if(e.value == "choungbuck")var city = region_choungbuck;
            else if(e.value == "choungnam")var city = region_choungnam;
            else if(e.value == "jeonlabuck")var city = region_jeonlabuck;
            else if(e.value == "jeonlanam")var city = region_jeonlanam;
            else if(e.value == "gyeongsangbuck")var city = region_gyeongsangbuck;
            else if(e.value == "gyeongsangnam")var city = region_gyeongsangnam;
            
            target.options.length = 0;

            for (x in city) {
                var opt = document.createElement("option");
                opt.value = city[x];
                opt.innerHTML = city[x];
                target.appendChild(opt);
            }
        }
    </script>

	<br><br>
	


	<footer class="container">
		<hr>
		<p>
			&copy; 대표 : 윤해상    고유 번호 : 20191002    메일 : jjj1299@sungkyul.ac.kr
		</p>
	</footer>
    <script src="js/dropdown.js"></script>
</body>
</html>