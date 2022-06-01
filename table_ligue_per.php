<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리그앙 개인 순위표</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/table_ligue_per.css">
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <section id="main_img"></section>

    <nav id='sub_menu'>
        <ul>
            <li>
                <a href="table_ligue.php">팀 순위</a>
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
                <td colspan="3"><img src="img/lig/mbappe.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/payet.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/mbappe.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/depay.jpg" width="270px"></td>
            </tr>
            
            <tr class="player">
                <td class="fstNum">1</td>
                <td class="fstName">킬리안 음바페</td>
                <td class="last">27 골</td>

                <td class="fstNum">1</td>
                <td class="fstName">디미트리 파예</td>
                <td class="last">11 회</td>

                <td class="fstNum">1</td>
                <td class="fstName">킬리안 음바페</td>
                <td class="last">34 P</td>

                <td class="fstNum">1</td>
                <td class="fstName">멤피스 데파이</td>
                <td class="last">104 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">파리 생제르맹 FC</td>
                <td colspan="3" class="pTeam">올랭피크 드 마르세유</td>
                <td colspan="3" class="pTeam">파리 생제르맹 FC</td>
                <td colspan="3" class="pTeam">올랭피크 리옹</td>
            </tr>

            <tr class="player">
                <td colspan="3"><img src="img/lig/depay.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/depay.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/depay.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/mbappe.jpg" width="270px"></td>
            </tr>

            <tr class="player">
                <td class="fstNum">2</td>
                <td class="fstName">멤피스 데파이</td>
                <td class="last">20 골</td>

                <td class="fstNum">1</td>
                <td class="fstName">멤피스 데파이</td>
                <td class="last">11 회</td>

                <td class="fstNum">2</td>
                <td class="fstName">멤피스 데파이</td>
                <td class="last">31 P</td>

                <td class="fstNum">2</td>
                <td class="fstName">킬리안 음바페</td>
                <td class="last">102 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">올랭피크 리옹</td>
                <td colspan="3" class="pTeam">올랭피크 리옹</td>
                <td colspan="3" class="pTeam">올랭피크 리옹</td>
                <td colspan="3" class="pTeam">파리 생제르맹 FC</td>
            </tr>

            <tr class="player">
                <td colspan="3"><img src="img/lig/benyedder.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/golovin.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/benyedder.jpg" width="270px"></td>
                <td colspan="3"><img src="img/lig/laborde.jpg" width="270px"></td>
            </tr>

            <tr class="player">
                <td class="fstNum">2</td>
                <td class="fstName">비삼 벤 예데르</td>
                <td class="last">20 골</td>

                <td class="fstNum">3</td>
                <td class="fstName">알렉산드르 골로빈</td>
                <td class="last">9 회</td>

                <td class="fstNum">3</td>
                <td class="fstName">비삼 벤 예데르</td>
                <td class="last">27 P</td>

                <td class="fstNum">3</td>
                <td class="fstName">가에탕 라보르드</td>
                <td class="last">75 회</td>
            </tr>
            <tr>
                <td colspan="3" class="pTeam">AS 모나코 FC</td>
                <td colspan="3" class="pTeam">AS 모나코 FC</td>
                <td colspan="3" class="pTeam">AS 모나코 FC</td>
                <td colspan="3" class="pTeam">몽펠리에 에로 SC</td>
            </tr>

        </table>
    </section>
</body>
</html>