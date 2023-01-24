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

    // Create table "users" if not exists: myblog_db
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

}