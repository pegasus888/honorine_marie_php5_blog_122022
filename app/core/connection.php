<?php

// Instead of having to change credentials every single time --> if localhost or not (website server)
if($_SERVER['SERVER_NAME'] == "localhost")
{
	// Connection values:
    define('DBUSER',"root");
	define('DBPASS',"root");
	define('DBNAME',"myblog_db");
	define('DBHOST',"localhost");

}else
    // website version
{
	define('DBUSER',"root");
	define('DBPASS',"root");
	define('DBNAME',"myblog_db");
	define('DBHOST',"localhost");
}