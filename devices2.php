<html>
<head>
<title>homeAutomation</title>
</head>
<body bgcolor="gold">
<h1 style="color: black ; font-size:75px" align="center">HOME AUTOMATION </h1>
<align="center">
<hr size="20%" color="black">
<?php
$x=mysqli_connect("localhost","root","","silpa");
$z1="select * from devices where name='device1'";
$qr1=mysqli_query($x,$z1);
$s1=mysqli_fetch_array($qr1);
$q1=$s1['status'];
if ($q1 == "OFF"){
 $p1="ON";}
else{
 $p1="OFF";}

$z2="select * from devices where name='device2'";
$qr2=mysqli_query($x,$z2);
$s2=mysqli_fetch_array($qr2);
$q2=$s2['status'];
if ($q2 == "OFF"){
 $p2="ON";}
else{
 $p2="OFF";}

$z3="select * from devices where name='device3'";
$qr3=mysqli_query($x,$z3);
$s3=mysqli_fetch_array($qr3);
$q3=$s3['status'];
if ($q3 == "OFF"){
 $p3="ON";}
else
{ $p3="OFF";}

$z4="select status from devices where name='device4'";
$qr4=mysqli_query($x,$z4);
$s4=mysqli_fetch_array($qr4);
$q4=$s4['status'];
if ($q4 == "OFF"){
 $p4="ON";}
else{
 $p4="OFF";}
?>
   
<table align="center" border="10px">
<col width=150 >
<col width=80>
<col width=80>
<tr>
<td height=100><h3 align="center">device1</h3></td>
<td height =100 align="center"><form method="POST" action ="device1onoff.php">
<input type="submit"value ="<?php echo $p1; ?>" >
</form>
</td>
</tr>


<tr>
<td height=100><h3 align="center">device2</h3></td>
<td height =100 align="center"><form method="POST" action ="device2onoff.php">
<input type="submit"value ="<?php echo $p2; ?>" >
</form>
</td>
</tr>


<tr>
<td height=100><h3 align="center">device3</h3></td>
<td height =100 align="center"><form method="POST" action ="device3onoff.php">
<input type="submit"value ="<?php echo $p3; ?>">
</form>
</td>
</tr>



<tr>
<td height=100><h3 align="center">device4</h3></td>
<td height =100 align="center"><form method="POST" action ="device4onoff.php">
<input type="submit"value ="<?php echo $p4; ?>" >
</form>
</td>
</tr>




<table>
</align>
<br>
<?PHP
$x=mysqli_connect("localhost","root","","silpa");

$r="select * from devices";
$qr=mysqli_query($x,$r);
?>
<table align = "center" border="4px">
<tr bgcolor="lightpink">
<td> Device </td>
<td> Status </td>
</tr>
<?PHP while( $s=mysqli_fetch_array($qr))
{ ?> 

<tr bgcolor="wheat">
<td> <?PHP echo $s['name']; ?> </td>
<td>  <?PHP echo $s['status']; ?> </td>
</tr>

<?PHP } ?>

</table>
<h2 align="center">"Do you want to set the time"</h2>
<form method="POST" action="time.php">
<p align="center">
<input type="submit" value="Yes" ></p>
</form>

</body>
</html>
