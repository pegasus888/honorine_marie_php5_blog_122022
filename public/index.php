<?php

session_start();

// As everything is loaded in init.php we have to require this file here
require "../app/core/init.php";


// Redirect any url to home
$url = $_GET['url'] ?? 'home';


$url = strtolower($url);


// Explode the url (= will create an array with individual items)
$url = explode("/", $url);

// Looking for the 1st item (and trim it out)
$page_name = trim($url[0]);

// Then we need to construct a file (.php because looking for a php file!)
$filename = "../app/pages/".$page_name.".php";

// Need to check if the file exist
if(file_exists($filename))
{
	require_once $filename;
}else
{
	require_once "../app/pages/404.php";
}


//echo "<pre>";
//echo $filename;
//print_r($url);
//echo "hello world";