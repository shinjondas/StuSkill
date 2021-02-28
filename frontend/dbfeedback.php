<html>
<body>
	<center>
	<div class="container">
		THANK YOU FOR YOUR FEEDBACK! WE PROMISE TO KEEP IMPROVING!
</div></center>
<style>
	body{
		background-image: linear-gradient(rgb(85, 148, 231),rgb(78, 151, 247));
    	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	}
	.container{
		background-color:rgba(255, 255, 255, 0.322);
		padding:5%;
		margin-top:15%;
		color:#fff;
	}
<?php
	$dbhost	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "feedback";

	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()){ 
		die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
    }
  $queryy= "CREATE TABLE users (username varchar(20), email varchar(20) PRIMARY KEY, findus varchar(20), messages VARCHAR(500))";
$sssql=mysqli_query($con, $queryy);
if(isset($_POST["submit"]))
{
  $insert_sql = "INSERT INTO users VALUES('$_POST[name]','$_POST[email]','$_POST[finduss]','$_POST[message]')";
  $result=mysqli_query($con, $insert_sql);

}

?>
</body>
</html>