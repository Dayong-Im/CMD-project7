<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>UNI League</title>
<link rel="stylesheet" type="text/css" href="./css/nav.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
<script>
	function check_input() {
		if (!document.board_form.subject.value)
    {
        alert("제목을 입력하세요!");
        document.board_form.subject.focus();
        return;
    }
		if (!document.board_form.content.value)
	{
        alert("내용을 입력하세요!");    
        document.board_form.content.focus();
        return;
    }
		document.board_form.submit();
	}
</script>
</head>
<body> 
<header>
	<?php include "new_nav.php";?>
</header>  
<section>
	<div id="big_board_box">
		<div id="board_box">
			<h3 id="board_title">
				게시판 > 글 쓰기
			</h3>
			<form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
				<ul id="board_form">
					<li>
						<span class="col1">이름 : </span>
						<span class="col2"><?=$username?></span>
					</li>		
					<li>
						<span class="col1">제목 : </span>
						<span class="col2"><input name="subject" type="text"></span>
					</li>	    	
					<li id="text_area">	
						<span class="col1">내용 : </span>
						<span class="col2">
						<textarea name="content"></textarea>
						</span>
					</li>
					<li>
						<span class="col1"> 첨부 파일</span>
						<span class="col2"><input type="file" name="upfile"></span>
					</li>
				</ul>
				<ul class="buttons">
					<li><button id = "clear_bt" type="button" onclick="check_input()">완료</button></li>
					<li><button id = "list_bt" type="button" onclick="location.href='board_list.php'">목록</button></li>
				</ul>
			</form>
		</div> <!-- board_box -->
	</div>
</section> 
</body>
</html>
