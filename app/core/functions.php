<?php

create_tables();
function create_tables()
{
    // Make a connection with DB using a PDO Object
    $string = "mysql:hostname=localhost;";
    $con = new PDO($string, DBUSER, DBPASS);

    //print_r($con); (to print "PDO Object()" on index.php page)

    // Create DB: myblog_db
	$query = "create database if not exists ". DBNAME;
	$stm = $con->prepare($query);
	$stm->execute();


}