<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
    <div class = "navbar">
        <div class = "menu"> 
            <a href="#" class="top-menu"><i class="fa-solid fa-bars"></i></a>     
            <div class = "sub-menu">
                <ul class = "sub-menu-list">
                    <li>
                        <a href="table_epl.php"><span class = "title">EPL</span></a>
                    </li>
                    <li>
                        <a href="table_laliga.php"><span class = "title">La Liga</span></a>
                    </li>
                    <li>
                        <a href="table_bun.php"><span class = "title">Bundes Liga</span></a>
                    </li>
                    <li>
                        <a href="table_serie.php"><span class = "title">Seria</span></a>
                    </li>
                    <li>
                        <a href="table_ligue.php"><span class = "title">Ligue</span></a>
                    </li>
                    <li>
                        <a href="board_list.php"><span class = "title">게시판</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="top">
            <h3>
                <a href="new_main.php">U N L</a>
            </h3>
        </div>
        <div id = "top_menu">
            <ul>  
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
    </div>
