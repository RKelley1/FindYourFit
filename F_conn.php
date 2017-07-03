<?php

$connection=mysqli_connect("127.0.0.1", "root", "Eason950528", "db");

if(mysqli_connect_errno())
{
	echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}

?>
