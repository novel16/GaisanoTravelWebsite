<?php

$password = getenv('MYSQL_PASSWORD');

$con = mysqli_connect('localhost','root',$password,'travelsystem');

if(!$con){
    die("Connection Failed" . mysqli_connect_error());
}

?>