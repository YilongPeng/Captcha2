<?php

header('Content-type:image/jpeg');
$validate = '';
for ($i = 1; $i <= 4; ++$i) {
    $validate .= dechex(rand(1, 15));
}
$img = imagecreatetruecolor(130, 50);
$bg = imagecolorallocate($img, 0, 0, 0);
$color1 = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 20, 10, $validate, $color1);
imagejpeg($img);
