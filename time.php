<html>
<body bgcolor="lightblue">
<p align=left>
<form method="POST" action="devices2.php"><input type="submit" value="back"></form></p>
<table align="center" border="10px">
<col width=150 >
<col width=80>
<tr>
<th>Devices</th>
<th>Start</th>
<th>End</th>
</tr>

<tr bgcolor="yellow">
<td height=100><h3 align="center">device1</h3></td>
<form method="POST" action=d1.php>
<td height=100> <input type="time" name="time1"> </td>
<td height=100><input type="time" name="time2"></td>
<td><input type="submit" value="submit"></td>
</form>
</tr>

<tr bgcolor="yellow">
<td height=100><h3 align="center">device2</h3></td>
<form method="POST" action="d2.php">
<td height=100><input type="time" name="time1"></td>
<td height=100><input type="time" name="time2"></td>
<td><input type="submit" value="submit"></td>
</form>
</tr>

<tr bgcolor="yellow">
<td height=100><h3 align="center">device3</h3></td>
<form method="POST" action="d3.php">
<td height=100><input type="time" name="time1"></td>
<td height=100><input type="time" name="time2"></td>
<td><input type="submit" value="submit"></td>
</form>
</tr>

<tr bgcolor="yellow">
<td height=100><h3 align="center">device4</h3></td>
<form method="POST" action="d4.php">
<td height=100><input type="time" name="time1"></td>
<td height=100><input type="time" name="time2"></td>
<td><input type="submit" value="submit"></td>
</form>
</tr>
</body>
</html>