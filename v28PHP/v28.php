<!DOCTYPE html>
<html>
<head>
<meta charset="UTS-8">
<title>PHP Video 28 Notes</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<ul>
    <li><a href="index.php">HOME</a><li>
    <li><a href="contact.php">CONTACT</a></li>
<ul>

<?php 

$_SESSION['username'] = "sam948a"; 
echo $_SESSION['username']; 
// would only work in this specific page in a website
// in the video there are more pages but i cannot make them

session_start();
// saves the session into other pages

if (!isset($_SESSION['username'])) {
    echo "You are not logged in!"
 } else {
    echo "You are loggeed in!";
// this basically checks if a user is logged in with the correct session
}

?>