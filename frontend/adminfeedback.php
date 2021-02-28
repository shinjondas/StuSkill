<html>
<body>
  <style>
    body{
    background-image: linear-gradient(rgb(85, 148, 231),rgb(78, 151, 247));
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color:rgb(243, 243, 243);
  }
  table{
    border-spacing:0;
  }
  th{
    color:rgb(235, 223, 155);
    font-weight:300;
  }
    td,th{
      border:1px solid rgb(243, 243, 243);
      padding:10px;
    }
    td{
      padding:20px;
      font-weight:200;
    }
  </style>
<?php
$dbhost	= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "feedback";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()){ 
		die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
    }
  print "<center><table><caption style='padding-bottom:10px;color:rgb(235, 223, 155);font-weight:500;font-size:120%'> User Feedback</caption>";
  print "<tr><th>Name</th><th>Email ID</th><th>Found us via</th><th>Message</th></tr>";

$queryyy="SELECT * FROM users";
/*$q2="SELECT count(reg_no) from domain";
$c=mysqli_connect("localhost","root","","quiz");
$count=mysqli_query($c,$q2);*/
$resultt=mysqli_query($con, $queryyy);

if (mysqli_num_rows($resultt) > 0) {
    while($row = mysqli_fetch_assoc($resultt)) {
      echo "<tr><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>    " . $row["findus"]."</td><td>" . $row["messages"]. "</td></tr><br>";
    }
  } else {
    echo "0 results";
  }
  print "</table></center>";
  mysqli_close($con);
?>
<br><br><br><br>
<center><a href="adminlogin.html">Logout</a></center>
<style>
  a{
    margin-top:50px;
    text-decoration: none;
    color:rgb(85, 148, 231);
    padding:10px;
    background-color: rgb(235, 223, 155);
    border: 2px solid rgb(235, 223, 155);
    border-radius: 7%;
  }
 
  </style>
</body>
</html>

