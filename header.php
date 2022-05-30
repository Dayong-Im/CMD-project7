<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
        <div id="top">
            <h3>
                <a href="index.php" >U N L</a>
            </h3>
            <ul id="top_menu">  
<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
<?php
    }
?>
            </ul>
        </div>
        <div id="menu_bar">
            <ul>  
                <li><a href="index.php">프리미어리그</a></li>
                <li><a href="message_form.php">라리가</a></li>                                
                <li><a href="#">분데스리가</a></li>
                <li><a href="index.php">세리에A</a></li>
                <li><a href="#">리그앙1</a></li>
                <li><a href="board_form.php">게시판</a></li>
            </ul>
        </div>