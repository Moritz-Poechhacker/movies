<?php
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 07.11.2017
 * Time: 09:13
 */

require_once "vendor/autoload.php";

use Moritz\Movies\Movie;
use Endroid\QrCode\QrCode;
$Movie1 = new Movie("Der Mann mit der Todeskralle", 5, "https://www.youtube.com/watch?v=80wXmIcyZwk");
$qrCode = new QrCode($Movie1->getVideoURL());

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();


function outputJSON(Movie $Movie1):string{
    return '{'.'Name: '.$Movie1->getName();
}

echo $Movie1;