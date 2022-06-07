<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>UNI League</title>
<link rel="stylesheet" type="text/css" href="./css/nav.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<link rel="stylesheet" type="text/css" href="./css/new_footer.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
</head>
<body> 
<header>
	<?php include "new_nav.php";?>
</header>  
<section>
		<div id="board_box">
			<h3 class="title" style = "margin: 0;">
			커뮤니티&nbsp;&nbsp;|&nbsp;&nbsp;게시글
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	include ('db/db.php');
    $con = mysqli_connect($db_host, $db_user, $db_pw, $db_name);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
		<ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
						<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
						}
				?>
				<?=$content?>
			</li>		
		</ul>
		<ul class="buttons">
				<li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
				<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'"
					<?php if ($_SESSION["userid"]!=$row["name"]) echo " class=\"hidden\""?>>수정</button></li>
				<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'"
					<?php if ($_SESSION["userid"]!=$row["name"]) echo " class=\"hidden\""?>>삭제</button></li>
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
		</ul>
	</div> <!-- board_box -->
</section> 
<?php include "new_footer.php"; ?>
</body>
</html>
