<?php
function OpenConnection()
{
	$dbhost = "localhost"; 
	$dbuser = "testuser";
	$dbpass = "adminpassword1234";
	$db = "site_database";


	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Sikertelen kapcsolódás: %s\n". $conn -> error);

	 
	return $conn;
 }
 
function CloseCon($conn)
{
	$conn -> close();
}
   
?>