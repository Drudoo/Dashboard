<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://pivpn.local/admin/api.php');
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
