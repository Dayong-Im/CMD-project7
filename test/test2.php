<?php
    include ('simple_html_dom.php');

    // Create DOM from URL
    $html = file_get_html('https://sports.news.naver.com/wfootball/record/index?category=epl&tab=team');

    // Find all images
    foreach($html->find('span [class="title"]')->plaintext as $element)
    echo $element . '<br>';
    
?>

