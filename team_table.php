<?php
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
        
        $background = "img/".$league."/".$_GET["league"].".png";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프리미어리그 순위표</title>
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
    <style>
        #main_img {
            width: 100%;
            height: 600px;
            background-image: url('<?php echo $background; ?>');
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <?php include "new_nav.php"; ?>
        </nav>
    </header>
    <section id="main_img" ></section>
    <!--
    <nav id='sub_menu'>
        <ul>
            <li id="selected">
                팀 순위
            </li>
            <li>
                <a href="table_epl_per.php">개인 순위</a>
            </li>
        </ul>
    </nav>
    -->
    

    <section id='contents'>
        <h1 id="season">2021-2022 시즌</h1>

        <table>
            <tbody>
            <tr><td class="head" colspan="11"></td></tr>
                <tr>
                    <th>순위</th>
                    <th colspan="2" class="t">팀</th>
                    <th>경기수</th>
                    <th class="point">승점</th>
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
                <td class="logo"><img src=<?php echo $logo; ?>></td>
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
    
    <!--
    <footer>
		<?php //include "new_footer.php";?>
    </footer>
    -->
</body>
</html>