<?php

create_tables();
function create_tables()
{
    // Make a connection with a DB using a PDO Object
    $string = "mysql:hostname=localhost;";
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