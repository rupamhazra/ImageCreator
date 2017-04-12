<?php
$x=480;
$y=320;
$image=imagecreate($x,$y);
$white=imagecolorallocate($image,95,73,255);
imagejpeg($image);
header('Content-Type: image/jpeg');
?>