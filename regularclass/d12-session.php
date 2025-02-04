<?php
session_start();

$_SESSION['name'] = 'John Doe';
$_SESSION['email'] = 'john@mail.com';
$_SESSION['age'] = 30;

echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION["age"];


session_unset(); // remove all session variables when next page is loaded like testSession.php

?>