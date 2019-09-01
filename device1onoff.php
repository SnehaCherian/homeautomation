<html>
<body bgcolor="lightblue">
<?PHP
$x=mysqli_connect("localhost","root","","silpa");
$z="select * from devices where name='device1'";
$pr1=mysqli_query($x,$z);
$s1=mysqli_fetch_array($pr1);
$p1=$s1['status'];

$r1="update devices set status='ON' where name='device1' ";
$r2="update devices set status='OFF' where name='device1' ";
if ($p1 == "OFF"){
 $qr=mysqli_query($x,$r1);
$s="ON";}
else{
 $qr=mysqli_query($x,$r2);
$s="OFF";}
 ?>
<h1> device1 is <?php echo $s; ?></h1>
 <form method="POST" action ="devices2.php">
<input type="submit"value ="back">
</form>
</body>
</html>