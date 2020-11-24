<?php

/* Asylum Stresser API Example (Stop Stress) */ 

$key = "Asylum Stresser API Key (see Account page)"; 
$asylum = _asylumStopStress("192.168.0.1", true, $key); 

function _asylumStopStress($host, $use_tor, $key)
{
    $url = "https://api.asylumstresser.to/?key={$key}&host={$host}&stop=1";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if($use_tor)
    {
        curl_setopt($ch, CURLOPT_PROXYTYPE, 7);
        curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:9050");
    }
    $ret = curl_exec($ch);
    curl_close($ch);
    return $ret;
}
?>
