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

$url = 'https://sports.news.naver.com/wfootball/record/index?category=epl&tab=team';
$find_tag = 'script[type="text/javascript"]';
$res = scrapWebpage($url, $find_tag);

$data = $res[5];
preg_match_all('/\[([^\]]+)\]/is',$data, $result);

$json_string = implode("", $result[0]);

echo $json_string;

$decoded_json = json_decode($json_string, true);

/*
$string = preg_replace('/[\x00-\x1F\x7F]/u', '', $json_string);
$decoded_json = json_decode( preg_replace('/[\x00-\x1F\x7F]/u', '', $json_string), true );
$data_array = json_decode($string, true);
*/

// echo 'gettype($json_string) : '.gettype($json_string).'<br>';
// echo 'gettype($decoded_json) : '.gettype($decoded_json).'<br>';

?>