<html>
<body bgcolor="lightblue">
<?PHP
$x=mysqli_connect("localhost","root","","silpa");
$z="select * from devices where name='device4'";
$pr4=mysqli_query($x,$z);
$s4=mysqli_fetch_array($pr4);
$p4=$s4['status'];

$r1="update devices set status='ON' where name='device4' ";
$r2="update devices set status='OFF' where name='device4' ";
if ($p4 == "OFF"){
 $qr=mysqli_query($x,$r1);
$s="ON";}
else{
 $qr=mysqli_query($x,$r2);
$s="OFF";}
 ?>
<h1> device4 is <?php echo $s; ?></h1>
 <form method="POST" action ="devices2.php">
<input type="submit"value ="back">
</form>
</body>
</html>