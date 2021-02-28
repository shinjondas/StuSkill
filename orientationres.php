<html>
<body>
<?php include 'orientationques.php'; ?>
<?php
$reg_no=$_POST['reg_no'];
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);
if ( isset( $_POST['submit'] ) )
  { 
    $analyse= 0;
    $procedural= 0;
    $customer= 0;
    $manage= 0;
    $loner=0;
    $interactive= 0;
    $instrumentalist=0;
    $creative=0;
    $confused=0;
    $job=0;
    $study=0;

    for($i = 0; $i < count($_POST['a']); ++$i) {
        if($_POST['a'][$i] == '1')
        {
          ++$analyse;
        }
        if($_POST['a'][$i] == '2')
        {
          ++$procedural;
        }
        if($_POST['a'][$i] == '3')
        {
          ++$analyse;
        }
        if($_POST['a'][$i] == '4')
        {
          ++$manage;
        }
        if($_POST['a'][$i] == '5')
        {
          ++$customer;
        }
        if($_POST['a'][$i] == '6')
        {
          ++$manage;
        }
        if($_POST['a'][$i] == '7')
        {
          ++$loner;
        }
        if($_POST['a'][$i] == '8')
        {
          ++$interactive;
        }
        if($_POST['a'][$i] == '10')
        {
          ++$instrumentalist;
        }
        if($_POST['a'][$i] == '9')
        {
          ++$instrumentalist;
        }
        if($_POST['a'][$i] == '11')
        {
          ++$creative;
        }
        if($_POST['a'][$i] == '12')
        {
          ++$confused;
        }
        if($_POST['a'][$i] == '13')
        {
          ++$job;
        }
        if($_POST['a'][$i] == '14')
        {
          ++$study;
        }
        if($_POST['a'][$i] == '15')
        {
          ++$procedural;
          ++$instrumentalist;
        }

    }

    echo("<center>According to the test, we found your detailed orientation as: </center>");
    if($analyse>=1)
    {
        echo("<center>You like to analyse data and learn more about it.</center>");
        $str.="analysing capability,";
    }
    if($procedural>1)
    {
        echo("<center>You like to plan a certain procedure before working.</center>");
        $str.="procedural,";
    }
    if($manage>=1)
    {
        echo("<center>You organize and manage things well.</center>");
        $str.="management,";
    }
    if($customer>=1)
    {
        echo("<center>You care about your customer's needs.</center>");
        $str.="customer care,";
    }
    if($loner>=1)
    {
        echo("<center>You prefer to work alone most of the times.</center>");
        $str.="independent,";
    }
    if($interactive>=2)
    {
        echo("<center>You interact with others a lot.</center>");
        $str.="interactive,";
    }
    if($instrumentalist==1)
    {
        echo("<center>You enjoy working with objects and understand how they function.</center>");
        $str.="enjoy working with things,";
    }
    if($creative==1)
    {
        echo("<center>You're creative!<center>");
        $str.="creative,";
    }
    if($confused==1)
    {
        echo("<center>You're currently confused about your future choices but that's alright!</center>");
        $str.="confused,";
    }
    if($job==1)
    {
        echo("<center>You're willing to take job straight and think about high studies later.</center>");
        $str.="job-centric,";
    }
    if($study==1)
    {
        echo("<center>You're willing to take high studies straight and think about job later.</center>");
        $str.="studies-centric,";
    }
    echo ("<br><br><br><br><br>");
    $conn=mysqli_connect("localhost","root","","quiz");
    $insert="INSERT into orientation values('$reg_no','$str'); ";
    mysqli_query($conn,$insert);


}
?>

</body>
</html>
