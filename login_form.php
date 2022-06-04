<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>UNI League</title>
<link rel="stylesheet" type="text/css" href="./css/login.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<header>
		<?php include "new_main.php";?>
	</header>
	<section>
        <div id="main_content">
			<div id="login_box">
				<div id="login_title">
					<span>로그인</span>
				</div>
			<div id="login_form">
				<form  name="login_form" method="post" action="login.php">		       	
					<ul>
						<li><input type="text" name="id" placeholder="아이디" ></li>
						<li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> <!-- pass -->
					</ul>
					<div id="login_btn">
						<a href="#"><button onclick="check_input()">로그인</button></a>
					</div>		    	
				</form>
			</div> <!-- login_form -->
			</div> <!-- login_box -->
        </div> <!-- main_content -->
	</section> 
</body>
</html>

