<?php
	$ch = curl_init("http://192.168.0.46");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	$content = curl_exec($ch);
	
	echo $content;
	curl_close($ch);
?>