<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프리미어리그 순위표</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/table_laiga.css">
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <?php 
        if (!$userid )
        {
            echo("<script>
                    alert('로그인 후 이용해주세요!');
                    history.go(-1);
                    </script>
                ");
            exit;
        }
    ?>
    <section>
        <div id="premierleague-table">
            <div id="premierleague-table-header">
                <h4>Table</h4>
                <div class="tab-bar">
                    <ul class="tablist">
                        <li role="tab" tabindex="0" data-tab-index="0" class="active">개인 순위</li>
                    </ul>
                </div>
            </div>
            <div id="premierleague-table-container">
                <div class="premierleague-table-content">
                    <table>
                        <thead bgcolor="#0080FF"> 
                            <tr> 
                                <th title="순위"> 순위 </th> 
                                <th title="구단명" class="team"> 팀 </th> 
                                <th title="진행된 경기" class="played"> Played </th> 
                                <th title="승리한 경기" class="matches-won"> Won </th> 
                                <th title="무승부 경기" class="matches-drawn"> Drawn </th> 
                                <th title="패배한 경기" class="matches-lost"> Lost </th> 
                                <th title="골득점" class="goals-for"> 득점 </th> 
                                <th title="골실점" class="goals-against"> 실점 </th> 
                                <th title="골득실" class="goals-diff"> +/- </th> 
                                <th title="득점" class="pts"> 승점 </th>  
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="team-logo">
                                    <a href="https://kr.mancity.com/">
                                        <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_a3nyxabgsqlnqfkeg41m6tnpp.png" alt="맨체스터 시티" data-team-name="맨체스터 시티">
                                    </a>
                                    <span class="team--full-name" data-team-name="맨체스터 시티">
                                        맨체스터 시티
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 29 </td>
                                <td class="matches-drawn"> 6 </td>
                                <td class="matches-lost"> 3 </td>
                                <td class="matches-for"> 99 </td>
                                <td class="matches-aganst"> 26 </td>
                                <td class="goals-diff"> +73<!----></td>
                                <td class="goals-point"> 93<!----></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="team-logo">
                                    <a href="https://www.liverpoolfc.com/">
                                        <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_c8h9bw1l82s06h77xxrelzhur.png" alt="리버풀" data-team-name="리버풀">
                                    </a>
                                    <span class="team--full-name" data-team-name="리버풀">
                                        리버풀
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 28 </td>
                                <td class="matches-drawn"> 8 </td>
                                <td class="matches-lost"> 2 </td>
                                <td class="matches-for"> 94 </td>
                                <td class="matches-aganst"> 26 </td>
                                <td class="goals-diff"> +68<!----></td>
                                <td class="goals-point"> 92<!----></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="team-logo">
                                    <a href="https://www.chelseafc.com/en">
                                        <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_9q0arba2kbnywth8bkxlhgmdr.png" alt="첼시" data-team-name="첼시">
                                    </a>
                                    <span class="team--full-name" data-team-name="첼시">
                                        첼시
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 21 </td>
                                <td class="matches-drawn"> 11 </td>
                                <td class="matches-lost"> 6 </td>
                                <td class="matches-for"> 76 </td>
                                <td class="matches-aganst"> 33 </td>
                                <td class="goals-diff"> +43<!----></td>
                                <td class="goals-point"> 74<!----></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="team-logo">
                                    <a href="https://www.tottenhamhotspur.com/kr/">
                                        <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_22doj4sgsocqpxw45h607udje.png" alt="토트넘 홋스퍼" data-team-name="토트넘 홋스퍼"> 
                                    </a>
                                    <span class="team--full-name" data-team-name="토트넘">
                                        토트넘
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 22 </td>
                                <td class="matches-drawn"> 5 </td>
                                <td class="matches-lost"> 11 </td>
                                <td class="matches-for"> 69 </td>
                                <td class="matches-aganst"> 40 </td>
                                <td class="goals-diff"> +29<!----></td>
                                <td class="goals-point"> 71<!----></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="team-logo">
                                    <a href="https://www.arsenal.com">
                                        <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_4dsgumo7d4zupm2ugsvm4zm4d.png" alt="아스널" data-team-name="아스널">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        아스날
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 22 </td>
                                <td class="matches-drawn"> 3 </td>
                                <td class="matches-lost"> 13 </td>
                                <td class="matches-for"> 61 </td>
                                <td class="matches-aganst"> 48 </td>
                                <td class="goals-diff">  +13<!----></td>
                                <td class="goals-point"> 69<!----></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="team-logo">
                                    <a href="https://www.manutd.com/ko">
                                    <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_6eqit8ye8aomdsrrq0hk3v7gh.png" alt="맨체스터 유나이티드" data-team-name="맨체스터 유나이티드">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        맨체스터 유나이티드
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 16 </td>
                                <td class="matches-drawn"> 10 </td>
                                <td class="matches-lost"> 12 </td>
                                <td class="matches-for"> 57 </td>
                                <td class="matches-aganst"> 57</td>
                                <td class="goals-diff"> 0<!----></td>
                                <td class="goals-point"> 58<!----></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="team-logo">
                                    <a href="https://www.whufc.com/">
                                    <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_4txjdaqveermfryvbfrr4taf7.png" alt="웨스트햄 유나이티드" data-team-name="웨스트햄 유나이티드">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        웨스트햄 유나이티드
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 16 </td>
                                <td class="matches-drawn"> 8 </td>
                                <td class="matches-lost"> 14 </td>
                                <td class="matches-for"> 60 </td>
                                <td class="matches-aganst"> 51 </td>
                                <td class="goals-diff"> +9<!----></td>
                                <td class="goals-point"> 56<!----></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="team-logo">
                                    <a href="https://www.lcfc.com/">
                                    <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_avxknfz4f6ob0rv9dbnxdzde0.png" alt="레스터 시티" data-team-name="레스터 시티">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        레스터시티
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 14 </td>
                                <td class="matches-drawn"> 10 </td>
                                <td class="matches-lost"> 14 </td>
                                <td class="matches-for"> 62 </td>
                                <td class="matches-aganst"> 59 </td>
                                <td class="goals-diff"> +3<!----></td>
                                <td class="goals-point"> 52<!----></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="team-logo">
                                    <a href="https://www.brightonandhovealbion.com/">
                                    <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_e5p0ehyguld7egzhiedpdnc3w.png" alt="브라이튼 앤 호브" data-team-name="브라이튼 앤 호브">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        브라이튼 앤 호브
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 12 </td>
                                <td class="matches-drawn"> 15 </td>
                                <td class="matches-lost"> 11 </td>
                                <td class="matches-for"> 42 </td>
                                <td class="matches-aganst"> 44 </td>
                                <td class="goals-diff"> -2<!----></td>
                                <td class="goals-point"> 51<!----></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="team-logo">
                                    <a href="https://www.wolves.co.uk/">
                                    <img width="30" height="30" class="widget-match-standings__crest" src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_b9si1jn1lfxfund69e9ogcu2n.png" alt="울버햄튼 원더러스" data-team-name="울버햄튼 원더러스">                                    
                                    </a>
                                    <span class="team--full-name" data-team-name="아스날">
                                        울버햄튼 원더러스
                                    </span>
                                </td>
                                <td class="matches-played"> 38 </td>
                                <td class="matches-won"> 15 </td>
                                <td class="matches-drawn"> 6 </td>
                                <td class="matches-lost"> 17 </td>
                                <td class="matches-for"> 38 </td>
                                <td class="matches-aganst"> 43 </td>
                                <td class="goals-diff"> -5<!----></td>
                                <td class="goals-point"> 51<!----></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>