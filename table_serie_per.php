<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세리에 A 순위표</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/table_epl.css">
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef7a0bbb15.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include "new_nav.php" ?>
    </header>
    <section id="main_img"></section>

    <nav id='sub_menu'>
        <ul>
            <li>
                <a href="table_serie.php">팀 순위</a>
            </li>
            <li id="selected">
                개인 순위
            </li>
        </ul>
    </nav>

    <section id='contents'>
        <h1 id="season">2020-2021 시즌 선두</h1>
        <table>
            <tr>
                <th colspan="3">득점 순위</th>
                <th colspan="3">도움 순위</th>
                <th colspan="3">공격포인트 순위</th>
                <th colspan="3">슈팅 순위</th>
            </tr>
            <tr class="player">
                <td colspan="3"><img src="img/ser/ronaldo.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/malinovskyi.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/lukaku2.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/ronaldo.png" width="270px"></td>
            </tr>
            
            <tr class="player">
                <td class="fstNum">1</td>
                <td class="longName">크리스티아누 호날두</td>
                <td class="last">29 골</td>

                <td class="fstNum">1</td>
                <td class="longName">루슬란 말리노브스키</td>
                <td class="last">12 회</td>

                <td class="fstNum">1</td>
                <td class="fstName">로멜루 루카쿠</td>
                <td class="last">35 P</td>

                <td class="fstNum">1</td>
                <td class="longName">크리스티아누 호날두</td>
                <td class="last">161 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">유벤투스 FC</td>
                <td colspan="3" class="pTeam">아탈란타 BC</td>
                <td colspan="3" class="pTeam">FC 인터밀란</td>
                <td colspan="3" class="pTeam">유벤투스 FC</td>
            </tr>

            <tr class="player">
                <td colspan="3"><img src="img/ser/lukaku2.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/lukaku2.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/muriel.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/insigne.png" width="270px"></td>
            </tr>

            <tr class="player">
                <td class="fstNum">2</td>
                <td class="fstName">로멜루 루카쿠</td>
                <td class="last">24 골</td>

                <td class="fstNum">2</td>
                <td class="fstName">로멜루 루카쿠</td>
                <td class="last">11 회</td>

                <td class="fstNum">2</td>
                <td class="fstName">루이스 무리엘</td>
                <td class="last">31 P</td>

                <td class="fstNum">2</td>
                <td class="fstName">로렌초 인시네</td>
                <td class="last">140 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">FC 인터밀란</td>
                <td colspan="3" class="pTeam">FC 인터밀란</td>
                <td colspan="3" class="pTeam">아탈란타 BC</td>
                <td colspan="3" class="pTeam">SSC 나폴리</td>
            </tr>

            <tr class="player">
                <td colspan="3"><img src="img/ser/muriel.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/depaul.jpg" width="270px"></td>
                <td colspan="3"><img src="img/ser/ronaldo.png" width="270px"></td>
                <td colspan="3"><img src="img/ser/immobile.jpg" width="270px"></td>
            </tr>

            <tr class="player">
                <td class="fstNum">3</td>
                <td class="fstName">루이스 무리엘</td>
                <td class="last">22 골</td>

                <td class="fstNum">3</td>
                <td class="fstName">로드리고 데 파울</td>
                <td class="last">10 회</td>

                <td class="fstNum">2</td>
                <td class="longName">크리스티아누 호날두</td>
                <td class="last">31 P</td>

                <td class="fstNum">3</td>
                <td class="fstName">치로 임모빌레</td>
                <td class="last">111 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">아탈란타 BC</td>
                <td colspan="3" class="pTeam">우디네세 칼초</td>
                <td colspan="3" class="pTeam">유벤투스 FC</td>
                <td colspan="3" class="pTeam">SS 라치오</td>
            </tr>

        </table>
    </section>
</body>
</html>