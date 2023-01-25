<?php

// Running DB Queries
function query(string $query, array $data = [])
{

    $string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);

	$stm = $con->prepare($query);
	$stm->execute($data);

    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
	if(is_array($result) && !empty($result))
	{
		return $result;
	}

	return false;

}


// Just return a single result (one row)
function query_row(string $query, array $data = [])
{

	$string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
	$con = new PDO($string, DBUSER, DBPASS);

	$stm = $con->prepare($query);
	$stm->execute($data);

	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	if(is_array($result) && !empty($result))
	{
		return $result[0];
	}

	return false;

}


// Redirect signup page to login page
function redirect($page)
{

	header('Location: '.ROOT. '/' . $page);
	die;
}


// Signup page -> to retrieve all the information (text will not disappear signing up)
function old_value($key, $default = '')
{
	if(!empty($_POST[$key]))
		return $_POST[$key];

	return $default;
}


// Signup page ->
function old_checked($key, $default = '')
{
	if(!empty($_POST[$key]))
		return " checked ";

	return "";
}


// Users page: get image
function get_image($file)
{
	$file = $file ?? '';
	if(file_exists($file))
	{
		return ROOT.'/'.$file;
	}

	return ROOT.'/assets/images/no_image.jpg';
}



// Url friendly: creating slug from title & so on
function str_to_url($url)
{
	// Replaces quotes from a particular string with an empty string
	$url = str_replace("'", "", $url);

	// Removes all symbols from a particular string & replaces them with a dash
	$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);

	// Trims all dashes at the beginning & the end of the string
	$url = trim($url, "-");

	// Convert it to utf-8
	$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);

	// Change it to a lower string
	$url = strtolower($url);

	// Replaces anything that does not match any of these (like any characters from other languages)
	$url = preg_replace('~[^-a-z0-9_]+~', '', $url);

	return $url;
}


// Users page (clean up the name, html)
function esc($str)
{
	return htmlspecialchars($str ?? '');
}


// login page ->
function authenticate($row)
{
	$_SESSION['USER'] = $row;
}


// login page -> Check if a user is really authenticated: logged in
function logged_in()
{
	if(!empty($_SESSION['USER']))
		return true;

	return false;
}


//create_tables();
function create_tables()
{
    // Make a connection with a DB using a PDO Object
    $string = "mysql:hostname=".DBHOST.";";
    $con = new PDO($string, DBUSER, DBPASS);

    //print_r($con); (to print "PDO Object()" on index.php page)


    // Create a DB if not exists: myblog_db
	$query = "create database if not exists ". DBNAME;
	$stm = $con->prepare($query);
	$stm->execute();

     // Select a DB
	$query = "use ". DBNAME;
	$stm = $con->prepare($query);
	$stm->execute();


    // Create table "users" if not exists
    $query = "create table if not exists users(

        id int primary key auto_increment,
        username varchar(50) not null,
        email varchar(100) not null,
        password varchar(255) not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        role varchar(10) not null,

        key username (username),
        key email (email)
    )";
	$stm = $con->prepare($query);
	$stm->execute();


    // Create table "posts" if not exists
    $query = "create table if not exists posts(

		id int primary key auto_increment,
		user_id int,
		title varchar(100) not null,
        headline text null,
		content text null,
		image varchar(1024) null,
		date datetime default current_timestamp,
		slug varchar(100) not null,

		key user_id (user_id),
		key title (title),
		key slug (slug),
		key date (date)
    )";
    $stm = $con->prepare($query);
    $stm->execute();


    // Create table "comments" if not exists
    $query = "create table if not exists comments(

        id int primary key auto_increment,
        title varchar(100) not null,
		content text null,
		slug varchar(100) not null,
		disabled tinyint default 0,

        key title (title),
		key slug (slug)
    )";
	$stm = $con->prepare($query);
	$stm->execute();

}