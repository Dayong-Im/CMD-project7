<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>
<nav>		
    <div class = "navbar">
        <div class = "menu"> 
            <a href="#" class="top-menu"><i class="fa-solid fa-bars"></i></a>
            <div class = "sub-menu">
                <ul class = "sub-menu-list">
                    <li>
                        <a href="team_table.php?league=epl"><div class = "title">프리미어리그</d></a>
                    </li>
                    <li>
                        <a href="team_table.php?league=laliga"><div class = "title">프리메라리가</d></a>
                    </li>
                    <li>
                        <a href="team_table.php?league=bun"><div class = "title">분데스리가</div></a>
                    </li>
                    <li>
                        <a href="team_table.php?league=seria"><div class = "title">세리에A</d></a>
                    </li>
                    <li>
                        <a href="team_table.php?league=ligue1"><div class = "title">리그앙</div></a>
                    </li>
                    <li>
                        <a href="board_list.php"><div class = "title">커뮤니티</div></a>
                    </li>
                    <li>
                        <a href="site_map.php"><div class = "title">바로가기</div></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="top">
            <?php
                if($_SERVER['REQUEST_URI'] == "/unileague/team_table.php?league=epl")
                    echo "<div class=\"logowrapper\"><img class=\"logo\" src=\"img/".$league."/".$_GET["league"]."_logo.png\"></div>";
                if($_SERVER['REQUEST_URI'] == "/unileague/team_table.php?league=laliga")
                    echo "<div class=\"logowrapper\"><img class=\"logo\" src=\"img/".$league."/".$_GET["league"]."_logo.png\"></div>";
                if($_SERVER['REQUEST_URI'] == "/unileague/team_table.php?league=bun")
                    echo "<div class=\"logowrapper\"><img class=\"logo\" src=\"img/".$league."/".$_GET["league"]."_logo.png\"></div>";
                if($_SERVER['REQUEST_URI'] == "/unileague/team_table.php?league=seria")
                    echo "<div class=\"logowrapper\"><img class=\"logo\" src=\"img/".$league."/".$_GET["league"]."_logo.png\"></div>";
                if($_SERVER['REQUEST_URI'] == "/unileague/team_table.php?league=ligue1")
                    echo "<div class=\"logowrapper\"><img class=\"logo\" src=\"img/".$league."/".$_GET["league"]."_logo.png\"></div>";
            ?>
            <h3>
                <a href="index.php">UNI LEAGUE</a>
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
</nav>