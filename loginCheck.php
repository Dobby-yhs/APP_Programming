<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'project';
$con = new mysqli($host, $user, $pw, $dbName);

$signin_email = $_POST['signin_email']; // 아이디
$signin_password = $_POST['signin_password']; // 패스워드

$query = "select * from member where member_email='$signin_email' and member_pw='$signin_password'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($signin_email==$row['member_email'] && $signin_password==$row['member_pw']){ // id와 pw가 맞다면 login

	echo "<script> alert('로그인 성공'); </script>";
	echo "<script> location.href = 'index_ad.html'; </script>";

}else{ // id 또는 pw가 다르다면 admin_login 폼으로

   echo "<script> alert('로그인 실패'); </script>";
   echo "<script> location.href = 'index.html'; </script>";

}

?> 