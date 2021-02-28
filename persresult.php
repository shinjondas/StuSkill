<html>
<body>
<?php include 'personalityques.php'; ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$reg_no=$_POST['reg_no'];
if ( isset( $_POST['submit'] ) )
  { 

    $introvert= 0;
    $extrovert= 0;
    $relyonothers=0;
    $selfreliable= 0;
    $stable= 0;
    $risktaker= 0;
    $future=0;
    $present= 0;
    $procrastinator=0;
    $hardworker=0;
    for($i = 0; $i < count($_POST['a']); ++$i) {
        if($_POST['a'][$i] == '1')
        {
          ++$introvert;
        }
        if($_POST['a'][$i] == '2')
        {
          ++$extrovert;
        }
        if($_POST['a'][$i] == '3')
        {
          ++$relyonothers;
        }
        if($_POST['a'][$i] == '4')
        {
          ++$selfreliable;
        }
        if($_POST['a'][$i] == '5')
        {
          ++$stable;
        }
        if($_POST['a'][$i] == '6')
        {
          ++$risktaker;
        }
        if($_POST['a'][$i] == '7')
        {
          ++$future;
        }
        if($_POST['a'][$i] == '8')
        {
          ++$present;
        }
        if($_POST['a'][$i] == '10')
        {
          ++$procrastinator;
        }
        if($_POST['a'][$i] == '9')
        {
          ++$hardworker;
        }

    }

    echo("<center>According to the test, we found that:</center>");
    if($introvert==2)
    {
        echo("<center>You're an introvert.</center>");
        $str.="introvert;";
    }
    if($extrovert==2)
    {
        echo("<center>You're an extrovert.</center>");
        $str.="extrovert;";
    }
    if($introvert==1 && $extrovert==1)
    {
        echo("<center>You're an ambivert.</center>");
        $str.="ambivert;";
    }
    if($relyonothers==1)
    {
        echo("<center>You rely on others.</center>");
        $str.="reliant;";
    }
    if($selfreliable==1)
    {
        echo("<center>You're mostly independent.</center>");
        $str.="independent;";
    }
    if($stable==1)
    {
        echo("<center>You want a stable life.</center>");
        $str.="stability;";
    }
    if($risktaker==1)
    {
        echo("<center>You're willing to take risk for a better life.</center>");
        $str.="risk-taker;";
    }
    if($future==1)
    {
        echo("<center>You're more concerned about future than living in the present.</center>");
        $str.="future-concern;";
    }
    if($present==1)
    {
        echo("<center>You live in the present</center>");
        $str.="present-liver;";
    }
    if($procrastinator==1)
    {
        echo("<center>You're sort of a procrastinator!</center>");
        $str.="procrastinator;";
    }
    if($hardworker==1)
    {
        echo("<center>You're a hardworker!</center>");
        $str.="hardworker;";
    }
    echo("<br><br><br><br><br>");
    $conn=mysqli_connect("localhost","root","","quiz");
    $insert="INSERT into personality values('$reg_no','$str'); ";
    mysqli_query($conn,$insert);
}
?>
</body>
</html>
