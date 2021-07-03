<?php 

	$url = "https://image.shutterstock.com/image-photo/mountains-under-mist-morning-amazing-600w-1725825019.jpg";

	$image = "image.jpg";

	$fimage = fopen($image, "w+");
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_FILE,$fimage);
	curl_exec($ch);
	curl_close($ch);
	fclose($fimage);

 ?>