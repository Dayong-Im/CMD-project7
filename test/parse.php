<?php
require_once(__DIR__ . './vendor/autoload.php');

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

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
}

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
}

$tag = 'script[type="text/javascript"]';

$epl_team = 'https://sports.news.naver.com/wfootball/record/index?category=epl&tab=team';
$epl_team_data = scrapWebpage($epl_team, $tag);

$epl_player = 'https://sports.news.naver.com/wfootball/record/index?category=epl&league=100&tab=player';
$epl_player_data = scrapWebpage($epl_player, $tag);

$laliga_team = 'https://sports.news.naver.com/wfootball/record/index?category=primera&tab=team';
$laliga_team_data = scrapWebpage($laliga_team, $tag);


echo $epl_player_data[5];

?>