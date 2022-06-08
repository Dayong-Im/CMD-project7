<?php
require_once(__DIR__ . './vendor/autoload.php');

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

// 스크랩 함수
function scrapWebpage(string $url, string $selector): array
{
    $res = [];
    // 웹페이지 열기
    try {
        $client = new GuzzleClient();
        $response = $client->request('GET', $url);
    } catch (GuzzleException $e) {
        die('Exception');
    }
    
    if ($response->getStatusCode() == 200) {
        // 해당 선택자 찾기
        $html = strval($response->getBody());
        
        $crawler = new Crawler($html);
        $crawler = $crawler->filter($selector);

        foreach ($crawler as $domElement) {
            $res[] = $domElement->nodeValue;
        }
    }
    return $res;
}


// 스크랩 테스트 함수
function printLeagueData($scrap_data) {
    $teamData = $scrap_data[5];
    preg_match_all('/\[([^\]]+)\]/is', $teamData, $result);
    $str_arr = explode( "],[", implode(",", $result[0]) );
    $str = $str_arr[0].']';

    $json = json_decode($str, true);

    for($i=0; $i<count($json); $i++){
        echo "==================<br>";
        foreach($json[$i] as $key => $value) echo "[$key] => $value <br>";
        echo "==================<br>";
    }
} // 스크랩 테스트 함수

// 데이터 스크랩에 필요한 정보
$tag = 'script[type="text/javascript"]';

$epl_team    = 'https://sports.news.naver.com/wfootball/record/index?category=epl&tab=team';

$data = scrapWebpage($epl_team, $tag);
$teamData = $data[5];
preg_match_all('/\[([^\]]+)\]/is', $teamData, $result);
$str_arr = explode( "],[", implode(",", $result[0]) );
$str = $str_arr[0].']';

printLeagueData($data);

$json = json_decode($str, true);

?>