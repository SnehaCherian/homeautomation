<html>
<body bgcolor="black">
<h1 style="color:red;font-size:75px" align="center" >TIME SET!!!</h1>
<p align=left>
<form method="POST" action="time.php"><input type="submit" value="back"></form></p>
<img src="thumbsup.png" align="bottom" height="300" width="300" class="center">
<?php
$a1=$_POST['time1'];
$b1=$_POST['time2'];

$x1=mysqli_connect("localhost","root","","silpa");
$r1="update devices set start='$a1' where name='device4'";
$s1="update devices set end='$b1' where name='device4'";
$qr1=mysqli_query($x1,$r1);
$qr1=mysqli_query($x1,$s1);
?>
<h1 style="color:white; align="center" font-size:50px >DEVICE4:</h1>
<h2 style="color:white; align="center">Start time-<?php echo $a1; ?></h2>
<h2 style="color:white; align="center">End time-<?php echo $b1; ?></h2>
</body>
</html>