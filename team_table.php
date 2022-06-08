<?php
        $IMAGES=5;
        $league = $_GET["league"];
        switch ($_GET["league"]) {
            case "epl":
                $league = 1;
                break;
            case "laliga":
                $league = 2;
                break;
            case "bun":
                $league = 3;
                break;
            case "seria":
                $league = 4;
                break;
            case "ligue1":
                $league = 5;
                break;
            default:
                break;
        }

        include ('db/db.php');
        $con = mysqli_connect($db_host, $db_user, $db_pw, $db_name);
        
        $background = "img/".$league."/".$_GET["league"].".webp";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI League - 
        <?php switch($league) {
                case 1: echo "프리미어리그 순위"; break; 
                case 2: echo "라리가 순위"; break; 
                case 3: echo "분데스리가 순위"; break;
                case 4: echo "세리에A 순위"; break;
                case 5: echo "리그앙 순위"; break;
                default: break;} ?>
    </title>
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/img_slide.css">
    <link rel="stylesheet" type="text/css" href="./css/new_footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
    
    <style>
        /*
        #main_img { 
            width: 100%;
            background-image: url('<?php //echo $background; ?>');
            background-repeat: no-repeat;
            background-position: center;
            margin-top: 0px;
            margin-bottom: 30px;
        }
        */
    </style>
</head>
<body>
    <header>
        <?php include "new_nav.php"; ?>
    </header>
    <!-- 슬라이드쇼 컨테이너 -->
    <div class="slideshow-container">
        <!-- 숫자와 캡션이 있는 이미지 -->
        <?php for($i=0; $i<$IMAGES; $i++): ?>
            <div class="mySlides fade">
                <div class="numbertext"><?php echo $i+1;?> / 5</div>
                <img <?php echo "src=\"img/".$league."/".$_GET["league"].($i+1).".webp\""; ?> style="width:100%">
                <div class="text"><?php switch($league) {
                case 1: echo "@Premierleague"; break; 
                case 2: echo "@LaLigaSmartbank"; break; 
                case 3: echo "@Bundesliga"; break;
                case 4: echo "@Seria A TIM"; break;
                case 5: echo "@Ligue1"; break;
                default: break;} ?></div>
            </div>
            <!-- 다음, 이전 이미지 버튼 -->       
        <?php endfor?>
            <a class="prev" onclick="plusSlides(-1); clearInterval(a);">&#10094;</a>
            <a class="next" onclick="plusSlides(1); clearInterval(a);">&#10095;</a>
    </div>

    <br>

    <!-- 현재 이미지를 알려주는 하단의 점 -->
    <div style="text-align:center">
        <?php for($i=0; $i<$IMAGES; $i++): ?>
            <span class="dot" onclick="currentSlide(<?php echo $i+1;?>); clearInterval(a);"></span> 
        <?php endfor?>
    </div>
    
    <section id='contents'>
        <table>
            <tbody>
            <tr><td class="head" colspan="11"></td></tr>
            <tr><td id="season" colspan="11">2021-2022 시즌</td></tr>
                <tr>
                    <th>순위</th>
                    <th colspan="2" class="t">팀</th>
                    <th>경기수</th>
                    <th>승점</th>
                    <th>승</th>
                    <th>무</th>
                    <th>패</th>
                    <th>득점</th>
                    <th>실점</th>
                    <th>득실차</th>
                </tr>
            <tr>
                <?php
                $count_sql = "select count(*) from team where leagueId=".$league;
                $count = mysqli_fetch_array(mysqli_query($con, $count_sql));

                for($i=0; $i<$count[0]; $i++):
                    $query = "select * from team where leagueId=".$league." and rank=".$i+1;
                    $result = mysqli_fetch_array(mysqli_query($con, $query));
                    
                    $rank      = $result["rank"];
                    $teamName  = $result["teamName"]; 
                    $gameCount = $result["gameCount"];
                    $gainPoint = $result["gainPoint"];
                    $won       = $result["won"];
                    $drawn     = $result["drawn"];
                    $lost      = $result["lost"];
                    $gainGoal  = $result["gainGoal"];
                    $loseGoal  = $result["loseGoal"];
                    $goalGap   = $result["goalGap"];
                    $logo      = $result["logo"] ;
                
                ?>
                <td class="seq"><?php echo $rank; ?></td>
                <td class="tablelogo"><img src=<?php echo $logo; ?>></td>
                <td class="team"><?php echo $teamName; ?></td>
                <td><?php echo $gameCount; ?></td>
                <td class="point"><?php echo $gainPoint; ?></td>
                <td><?php echo $won; ?></td>
                <td><?php echo $drawn; ?></td>
                <td><?php echo $lost; ?></td>
                <td><?php echo $gainGoal; ?></td>
                <td><?php echo $loseGoal; ?></td>
                <td><?php echo $goalGap; ?></td>
            </tr>
            <?php endfor ?>
            <tr>
                <td class="tail" colspan="11">자료제공: 네이버 스포츠</td>
            </tr>
            </tbody>
        </table>

    </section>
	<?php include "new_footer.php";?>
    <script src="js/img_slide.js"></script>
</body>
</html>