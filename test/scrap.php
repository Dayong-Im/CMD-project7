<?php
$con = mysqli_connect("localhost", "uniadmin", "1q2w3e4r!", "uni");

require_once(__DIR__ . './vendor/autoload.php');

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

// 스크랩 함수
function scrapWebpage(string $url, string $selector): array
{
    $res = [];
    // 열기
    try {
        $client = new GuzzleClient();
        $response = $client->request('GET', $url);
    } catch (GuzzleException $e) {
        die('Exception');
    }
    
    if ($response->getStatusCode() == 200) {
        // 찾기
        $html = strval($response->getBody());
        
        $crawler = new Crawler($html);
        $crawler = $crawler->filter($selector);
        // 보기
        foreach ($crawler as $domElement) {
            $res[] = $domElement->nodeValue;
        }
    }
    return $res;
} // 스크랩 함수

// 스크랩 테스트 함수
function printLeagueData($scrap_data) {
    $teamData = $scrap_data[5];
    preg_match_all('/\[([^\]]+)\]/is', $teamData, $result);
    $str_arr = explode( "],[", implode(",", $result[0]) );
    $str = $str_arr[0].']';

    $json = json_decode($str, true);

    for($i=0; $i<count($json); $i++){
        echo "==================<br>";
        foreach($json[$i] as $key => $value) echo $key.":".$value."<br>";
        echo "==================<br>";
    }
} // 스크랩 테스트 함수

// DB에 팀 정보 입력
function insertTeam($con, $scrap_data, $league_code){
    $teamData = $scrap_data[5];
    preg_match_all('/\[([^\]]+)\]/is', $teamData, $result);
    $str_arr = explode( "],[", implode(",", $result[0]) );
    $str = $str_arr[0].']';

    $json = json_decode($str, true);

    for($i=0; $i<count($json); $i++){

        $teamName  = mb_convert_encoding($json[$i]["teamName"], 'UTF-8', 'HTML-ENTITIES');
        $id        = (int) $json[$i]["teamCode"];
        $gameCount = (int) $json[$i]["gameCount"];
        $gainPoint = (int) $json[$i]["gainPoint"];
        $won       = (int) $json[$i]["won"];
        $drawn     = (int) $json[$i]["drawn"];
        $lost      = (int) $json[$i]["lost"];
        $gainGoal  = (int) $json[$i]["gainGoal"];
        $loseGoal  = (int) $json[$i]["loseGoal"];
        $goalGap   = (int) $json[$i]["goalGap"];
        $rank      = (int) $json[$i]["rank"];

        $query = "insert into team(
                                    id, teamName, gameCount, gainpoint, 
                                    won, drawn, lost, gainGoal, loseGoal, 
                                    goalGap, rank, leagueId
                                )";
        $query.= "values(
                        '$id','$teamName','$gameCount','$gainPoint',
                        '$won','$drawn','$lost','$gainGoal',
                        '$loseGoal','$goalGap','$rank','$league_code'
                        )";
        mysqli_query($con, $query);
    }

} // DB에 팀 정보 입력

// 데이터 스크랩에 필요한 정보
$tag = 'script[type="text/javascript"]';

$epl_team    = 'https://sports.news.naver.com/wfootball/record/index?category=epl&tab=team';
$laliga_team = 'https://sports.news.naver.com/wfootball/record/index?category=primera&tab=team';
$bun_team    = 'https://sports.news.naver.com/wfootball/record/index?category=bundesliga&tab=team';
$seria_team  = 'https://sports.news.naver.com/wfootball/record/index?category=seria&tab=team';
$ligue1_team = 'https://sports.news.naver.com/wfootball/record/index?category=ligue1&tab=team';

$epl_team_data    = scrapWebpage($epl_team, $tag);
$laliga_team_data = scrapWebpage($laliga_team, $tag);
$bun_team_data    = scrapWebpage($bun_team, $tag);
$seria_team_data  = scrapWebpage($seria_team, $tag);
$ligue1_team_data = scrapWebpage($ligue1_team, $tag);

insertTeam($con, $epl_team_data,    1);
insertTeam($con, $laliga_team_data, 2);
insertTeam($con, $bun_team_data,    3);
insertTeam($con, $seria_team_data,  4);
insertTeam($con, $ligue1_team_data, 5);

echo "Data Scrap Completed <br>";

?>