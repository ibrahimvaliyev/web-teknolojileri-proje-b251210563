<?php

$apiKey = "8dfc02b0";
$film = "Inception";

$url = "https://www.omdbapi.com/?t=" . urlencode($film) . "&apikey=" . $apiKey;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if(curl_error($ch)){
    echo "CURL ERROR: " . curl_error($ch);
}

curl_close($ch);

$data = json_decode($response, true);

// TEST üçün bunu əlavə et
echo "<pre>";
print_r($data);
echo "</pre>";

?>