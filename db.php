<?php

$connection = mysqli_connect("localhost",'root','','db');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>