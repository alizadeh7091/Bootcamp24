<?php
/*تعداد صفحات یونیک در وبسایت*/
function getPages()
{
    $curl = curl_init();
    $requestType = 'GET'; 
    $url = 'https://www.yjc.ir';
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => $requestType,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $result =  mb_convert_encoding($response, 'HTML-ENTITIES', "UTF-8");
    $dom->loadHTML($result);
    // echo gettype($dom);
    $bosses = $dom->getElementsByTagName('a');

    // $links = [];
    // $i = 0;
    foreach ($bosses as $boss) {
        $links[] = $boss->getAttribute('href');
    }
    $unique_links = array_unique($links);

    $fp = fopen('file.csv', 'w');
    foreach ($unique_links as $link) {
        $linkToArr = array($link);
        fputcsv($fp, $linkToArr);
        // echo gettype($arrayName);
    }
    fclose($fp);
};
// getPages();


/*تعداد مقالات صفحه اصلی که کلمه رئیس جمهور دارد*/
function getBosses()
{
    $curl = curl_init();
    $requestType = 'GET'; 
    $url = 'https://www.yjc.ir';
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => $requestType,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $result =  mb_convert_encoding($response, 'HTML-ENTITIES', "UTF-8");
    $dom->loadHTML($result);
    // echo gettype($dom);
    $i = 0;
    $bosses = $dom->getElementsByTagName('div');
    $bossesArray = [];
    foreach ($bosses as $boss) {
        $title = $boss->nodeValue;
        if (strpos($title, 'رئیس جمهور') !== false) {
            $bossesArray[] = $title;
            $i++;
        }
    }
    $number_of_articles = array($i);
    print_r($number_of_articles);
    $fp = fopen('file1.csv', 'w');
    fclose($fp);
}
// getBosses();

