<?php
if(isset($_POST["submit"]))
{
$adminemail=$_POST['email'];
$pw=$_POST['password'];

if($adminemail=="shriyashish.mishra01@gmail.com"|| $adminemail=="shinjon12@gmail.com")
{
    if($pw=="onlyadmins")
    {
        header('Location: adminfeedback.php');
    }
    else{
        echo("Wrong credentials!");
    }
}
}
?>