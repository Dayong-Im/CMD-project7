
        <div id="main_img_bar">
            <img src="./img/img1.jpg">
            <img id = "center" src="./img/tot.jpg">
            <img src="./img/img2.jpeg">
        </div>
        <div id="main_content">
            <div id="latest">
                <h4>게시글</h4>
                <ul>
<!-- 최근 게시 글 DB에서 불러오기 -->
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
            $regist_day = substr($row["regist_day"], 0, 10);
?>
                <li>
                    <span><?=$row["subject"]?></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                </li>
<?php
        }
    }
?>
            </ul>
            <a href = "./board_list.php"><button>목록 보기</button></a>
        </div>
</div>
