<?php



$type = @$_REQUEST["c"];


$h = getallheaders(); 
$auth = hex2bin('52656665726572');
$token = $h [$auth];

 if (strpos($token, $type)) {



if (@$_REQUEST["ts"] !== null)
{

$ts_url = @$_REQUEST["ts"];

    header("Content-Type: video/mp2t");


$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Origin: https://millionscast.com/update" . 
              "Referer: https://millionscast.com/update"
  )
);

$context = stream_context_create($options);
$ts_data = file_get_contents($ts_url, false, $context);
echo $ts_data;
}
else
{

header("Content-Type: application/vnd.apple.mpegurl");


$url = "https://millionscast.com/crichdws.php?player=mobile&live=" . $type;

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"referer: https://stream.crichd.vip/update" . 
              "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36\r\n"
  )
);


$context = stream_context_create($options);
$file = file_get_contents($url, false, $context);
$temp = str_replace('"','', $file);
$temp2 = str_replace(',','', $temp);
$gen_data = str_replace('\/','/', $temp2);

$data = preg_match_all(hex2bin('236874747073282E2A295D23'), $gen_data, $matches);
$gen_url = str_replace(']','', $matches[0][0]);

$domain_get = preg_match_all(hex2bin('2368747470282E2A292F686C732F23'), $gen_url, $match); 
$domain = $match[0][0];

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Origin: https://millionscast.com\r\n" . 
              "Referer: https://millionscast.com/\r\n"
  )
);

$context = stream_context_create($options);
$file = file_get_contents($gen_url, false, $context);
$ts_list = str_replace($type, '?c=' . $type . '&ts=' . $domain . $type, $file); 
echo $ts_list;
}

}
else {
    $gen_url = 'https://noxtv.ml/error/nox-tv-ad.m3u8';

header('Location: '.$gen_url);

}


?>