<?php 
if($_POST != "" && isset($_POST['weather-city']) != '' && isset($_POST['weather-state']) != '' && isset($_POST['weather-country']) != '' ) {
$apiKey = "a74069e46d4ce46e40324446ebaeedfd";
$city= $_POST['weather-city'];
$state= $_POST['weather-state'];
$country= $_POST['weather-country']; 
//$country= $_POST['weather-country'];   
//exit;
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$state.",".$country."&lang=en&units=metric&APPID=" . $apiKey;
    
    
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
} 
?>