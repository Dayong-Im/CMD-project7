<?php


    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];

    include ('db/db.php');
    $con = mysqli_connect($db_host, $db_user, $db_pw, $db_name);
    $sql = "update board set subject='$subject', content='$content' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
            <script>
                location.href = 'board_list.php?page=$page';
            </script>
        ";
?>