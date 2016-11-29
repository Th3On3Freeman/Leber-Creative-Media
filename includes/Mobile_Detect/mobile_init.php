<?php

if (class_exists('Mobile_Detect')){
    return;
}

$mobileDetect   = false;
$isMobile       = false;
$isTablet       = false;
$isDesktop      = false;

$mobileDetectInclude = "Mobile_Detect.php";

if (is_readable($mobileDetectInclude)){
    include_once($mobileDetectInclude);
    
    if (!class_exists('Mobile_Detect')){
        die("Your file $mobileDetectInclude doesn't have the Mobile_Detect class. "
            . "Make sure that file has this class.");
    }

    $mobileDetect   = new Mobile_Detect;
    $isTablet       = $mobileDetect->isTablet();
    $isMobile       = $mobileDetect->isMobile() && !$isTablet;
    $isDesktop      = !$isMobile && !$isTablet;
} else {
    die("The $mobileDetectInclude file can't be included. Does it exist?");
}