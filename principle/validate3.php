<?php
header('Content-type:image/jpeg'); //告诉浏览器是哪种格式
$rand = '';
for ($i = 0; $i <= 3; ++$i) {
    $rand .= rand(0, 9);
}
$img = imagecreatetruecolor(80, 30);
$bg = imagecolorallocate($img, 0, 0, 0);
$color = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 3, 5, 5, $rand, $color);
imagejpeg($img);
