<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
// SELECT code_file FROM project WHERE pid = 18;
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

mysqli_query($con, "INSERT INTO `contact` (`name`,`email`,`phone`,`subject`,`message`) VALUES('$name','$email','$phone','$subject','$message');");
header('Location: ' . $website);
exit;
