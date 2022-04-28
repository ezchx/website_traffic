<?php

$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if (!$pageWasRefreshed) {
    $today = date("Y/m/d");
    $filename = 'traffic.json';
    $traffic = json_decode(file_get_contents($filename), true);
    $traffic[$today] += 1;
    file_put_contents($filename, json_encode($traffic));    
}

?>