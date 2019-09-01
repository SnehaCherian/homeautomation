<html>
<body bgcolor="lightblue">
<?PHP
$x=mysqli_connect("localhost","root","","silpa");
$z="select * from devices where name='device2'";
$pr2=mysqli_query($x,$z);
$s2=mysqli_fetch_array($pr2);
$p2=$s2['status'];

$r1="update devices set status='ON' where name='device2' ";
$r2="update devices set status='OFF' where name='device2' ";
if ($p2 == "OFF"){
 $qr=mysqli_query($x,$r1);
$s="ON";}
else{
 $qr=mysqli_query($x,$r2);
$s="OFF";}
 ?>
<h1> device2 is <?php echo $s; ?></h1>
 <form method="POST" action ="devices2.php">
<input type="submit"value ="back">
</form>
</body>
</html>