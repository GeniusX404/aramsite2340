<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("SITEURL","https://aram.com.tr/ar/");
define("SITENAME", "مجموعة آرام");
define("DESCRIPTION", "مجموعة آرام للمنتجات الغذائية");
define("FACEBOOK", "http://www.facebook.com/aramgrp/");
define("TWITTER", "https://twitter.com/aramgrp/");
define("INSTAGRAM", "https://instagram.com/aramgrp/");
define("YOUTUBE", "https://youtube.com/");
define("MAIL", "info@aram.com.tr");

$array = array(
    "home"  => array(
        "file"      => "home.php",
        "title"     => "",
        "keywords"  => "keywords",
    ),
	"contact"  => array(
        "file"      => "contact.php",
        "title"     => "تواصلوا معنا",
        "keywords"  => "keywords",
    ),
    "about"  => array(
        "file"      => "about.php",
        "title"     => "حول الشركة",
        "keywords"  => "keywords",
    ),
    "products"  => array(
        "file"      => "products.php",
        "title"     => "المنتجات",
        "keywords"  => "keywords",
    ),
    "notfound"  => array(
        "file"      => "home.php",
        "title"     => "مجموعة آرام",
        "keywords"  => "keywords",
    )
);

require 'system/system.php';

$pageUrl    = PAGEURL;
$assetsUrl  = SITEURL . "assets/";

if ($pageUrl == "") {
    $data = $array["home"];
} else {
    if (isset($array[$pageUrl])) {
        $data = $array[$pageUrl];
    }
	else {
        $data = $array["notfound"];
    }
}

$file       = "pages/" . $data["file"];
$title      = $data["title"];
$keywords   = $data["keywords"];

define("TITLE", $title);
define("KEYWORDS", $keywords);
define("ASSETSURL", $assetsUrl);

require "command/head.php";

require $file;

require "command/foot.php";

?>