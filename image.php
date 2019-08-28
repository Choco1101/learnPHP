<?php


 
session_start();
 
$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
  
function generate_string($input, $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
  
    return $random_string;
}
 
$image = imagecreatetruecolor(200, 50);
 
imageantialias($image, true);
 
$colors = [];
 
$red = mt_rand(125, 175);
$green = mt_rand(125, 175);
$blue = mt_rand(125, 175);
 
for($i = 0; $i < 5; $i++) {
  $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
}
 
imagefill($image, 0, 0, $colors[0]);
 
for($i = 0; $i < 10; $i++) {
  imagesetthickness($image, mt_rand(2, 10));
  $line_color = $colors[mt_rand(1, 4)];
  imagerectangle($image, mt_rand(-10, 190), mt_rand(-10, 10), mt_rand(-10, 190), mt_rand(40, 60), $line_color);
}
 
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);

$textcolors = [$black, $white];

$fonts = dirname(__FILE__).'/fonts/arial.ttf';
// $fonts = dirname(__FILE__).'/fonts/akashi.ttf';
// $fonts = 'E:/xampp/htdocs/test/akashi.ttf';
 
$string_length = 5;
$captcha_string = generate_string($permitted_chars, $string_length);
 
$_SESSION['captcha_text'] = $captcha_string;


$letter_space = 170/$string_length;
 $initial = 15; 

for($i = 0; $i < $string_length; $i++) {

  imagettftext($image, 20, mt_rand(-15, 15), $initial + $i*$letter_space, mt_rand(25, 40), $textcolors[mt_rand(0, 1)], $fonts, $captcha_string[$i] );

// imagestring($image, 5, $initial + $i*$letter_space, rand(10, 30), $captcha_string[$i], $textcolors[mt_rand(0, 1)]);

}
 
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
 

?>