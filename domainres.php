<html>
<body>
<?php include 'domainques.php'; ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);
$regno=$_POST['reg_no'];
if ( isset( $_POST['submit'] ) )
  { 
    
    $designer=0;
    $developer=0;
    $dataanalyst=0;
    $datasecurity=0;
    $CC=0;
    for($i = 0; $i < count($_POST['a']); ++$i) {
        if($_POST['a'][$i] == '1')
        {
          ++$designer;
        }
        if($_POST['a'][$i] == '2')
        {
          ++$developer;
        }
        if($_POST['a'][$i] == '3')
        {
          ++$dataanalyst;
        }
        if($_POST['a'][$i] == '4')
        {
          ++$datasecurity;
        }
        if($_POST['a'][$i] == '5')
        {
          ++$CC;
        }
        if($_POST['a'][$i] == '6')
        {
          ++$developer;
          ++$designer;
        }
        if($_POST['a'][$i] == '7')
        {
          ++$developer;
          ++$CC;
        }
        if($_POST['a'][$i] == '8')
        {
          ++$dataanalyst;
          ++$CC;
        }
    }
    $str.="Developer:".$developer.";Designer:".$designer.";Data-analyst:".$dataanalyst.";Data-security:".$datasecurity.";CC:".$CC;
    $conn=mysqli_connect("localhost","root","","quiz");
    $insert="INSERT into domain values('$regno','$str'); ";
    mysqli_query($conn,$insert);
  }
    ?>
</body>
</html>