<?php

$resim_adi = time();
$resim = $_POST['imgBase64'];
$resim = str_replace('data:image/png;base64,', '', $resim);
$resim = str_replace(' ', '+', $resim);
$resim = base64_decode($resim);
file_put_contents('files/'.$resim_adi.'.png', $resim);

echo $resim_adi;

?>