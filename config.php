<?php

$website = 'http://localhost:80';
$websitename = 'DigitalProjectHub';

$con = mysqli_connect("localhost", "root", "kali", "digitalprojecthub");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
