<?php 


// curl_init();
// curl_setopt();
// curl_exec();
// curl_close();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.covid19api.com/summary");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$arr = array('name' => , 'Abdullah');
curl_setopt($ch, CURLOPT_POSTFIELDS, $arr); // you can also post data 
$result = curl_exec($ch); // hold the data on in result variable 
print_r($result);
curl_close($ch);

 ?>