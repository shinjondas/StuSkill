<html>
<body>
<?php include 'aptiquizques.php'; ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$regno=$_POST['reg_no'];
if ( isset( $_POST['submit'] ) )
  {        
    $score=0;
    for($i = 0; $i < count($_POST['a']); ++$i) {
     if($_POST['a'][$i] == '1')
     {
       ++$score;
     }
  }
            if($score==7)
            {
            echo '<center>Your score is'.$score.'. Good job!</center><br><br><br><br><br>';

            }
            if($score<7 && $score>3)
            {
            echo '<center>Need a bit more practice. Your score is:'.$score.'</center><br><br><br><br><br>';

            }
            if($score<4)
            {
            echo '<center>Practice a lot of questions! Your score is:'.$score.'</center><br><br><br><br><br>';

            }
            $conn=mysqli_connect("localhost","root","","quiz");
    $insert="INSERT into aptitude values('$regno','$score'); ";
    mysqli_query($conn,$insert);
}
?>
</body>
</html>

