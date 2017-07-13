<?php
	$ch = curl_init("http://api.fixer.io/latest?base=DKK");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	$content = curl_exec($ch);
	
	echo $content;
	curl_close($ch);
?>