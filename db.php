<?php
	$dbhost	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "quiz";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()){ 
		die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
	}
	$perstable="CREATE TABLE personality(
		regno varchar(10) primary key,
		result varchar(100) not null);";
   if(mysqli_query($conn,$perstable)){
	   echo '<script>alert("Table created")</script>';}
   else {
	   echo "Error";
   }
   $domain="CREATE TABLE domain(
	regno varchar(10) primary key,
	result varchar(100) not null);";
if(mysqli_query($conn,$domain)){
   echo '<script>alert("Table created")</script>';}
else {
   echo "Error";
}
$orientation="CREATE TABLE orientation(
	regno varchar(10) primary key,
	result varchar(100) not null);";
if(mysqli_query($conn,$orientation)){
   echo '<script>alert("Table created")</script>';}
else {
   echo "Error";
}
$aptitude="CREATE TABLE aptitude(
	regno varchar(10) primary key,
	result varchar(100) not null);";
if(mysqli_query($conn,$aptitude)){
   echo '<script>alert("Table created")</script>';}
else {
   echo "Error";
}
?>