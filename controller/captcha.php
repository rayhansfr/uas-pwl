<?php
session_start();

// Generate string random
$randomString = generateRandomString(5);

// Store the random string in the session for verification later
$_SESSION['captcha_string'] = $randomString;

// Generate and output the CAPTCHA image
header('Content-Type: image/png');
$font = 6; // You can change the font size as needed
$image = imagecreate(80, 40); // You can adjust the image size as needed
$bgColor = imagecolorallocate($image, 245, 245, 245); // Background color (white)
$textColor = imagecolorallocate($image, 0, 0, 0); // Text color (black)
imagestring($image, $font, 10, 10, $randomString, $textColor);
imagepng($image);
imagedestroy($image);

// Function to generate a random string
function generateRandomString($length = 6)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
