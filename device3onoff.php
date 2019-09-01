<html>
<body bgcolor="lightblue">
<?PHP
$x=mysqli_connect("localhost","root","","silpa");
$z="select * from devices where name='device3'";
$pr3=mysqli_query($x,$z);
$s3=mysqli_fetch_array($pr3);
$p3=$s3['status'];

$r1="update devices set status='ON' where name='device3' ";
$r2="update devices set status='OFF' where name='device3' ";
if ($p3 == "OFF"){
 $qr=mysqli_query($x,$r1);
$s="ON";}
else{
 $qr=mysqli_query($x,$r2);
$s="OFF";}
 ?>
<h1> device3 is <?php echo $s; ?></h1>
 <form method="POST" action ="devices2.php">
<input type="submit"value ="back">
</form>
</body>
</html>