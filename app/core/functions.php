<?php

create_tables();
function create_tables()
{

    $string = "mysql:hostname=localhost;";
    $con = new PDO($string, DBUSER, DBPASS);

    print_r($con);
}