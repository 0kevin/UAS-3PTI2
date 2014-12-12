<?php require_once("../include/db_connection.php");?>	
<?php
$sql = "SELECT * FROM gallery";
	$hasil = mysqli_query($koneksi,$sql);
?>
<?php
$sql1 = "SELECT * FROM page";
	$hasil1 = mysqli_query($koneksi,$sql1);
?>
<?php
$sql2 = "SELECT * FROM video";
	$hasil2 = mysqli_query($koneksi,$sql2);
?>

<?php
$sql3 = "SELECT * FROM logo";
	$hasil3 = mysqli_query($koneksi,$sql3);
?>
<html>
<head>
<title> GKSBB's Macaroons </title>
</head>
<body background="gambar/wall.jpg">

<table border="12" width="1100" height="1200" align="center">
<tr>
<td colspan="6" height="100">
<?php
	$logo = mysqli_fetch_assoc($hasil3);
?>
<img src="<?php echo $logo['file'];?>"/>
</td>
</tr>
<tr height="20">
<td colspan="7" align="center" style="background:#EEB3EE"><font size="+10">Macaroon</font></td>
</tr>
<tr height="10">
<td colspan="7" align="center"><marquee><font size="+2">GKSBB's Macaroons - GKSBB's Macaroons - GKSBB's Macaroons</font></marquee></td>
</tr>
<tr background="gambar/line.jpg" height="15">
<td align="center"><a href="Home.php"><font size="+3">Home</font></td>
<td align="center"><a href="history.php"><font size="+3">History</font></td>
<td align="center"><a href="aboutus.php"><font size="+3">About Us</font></td>
<td align="center"><a href="contactus.php"><font size="+3">Contact Us</font></td>
<td align="center"><a href="komentarr.php"><font size="+3">Comment</font></td>
<td align="center"><a href="Login.php"><font size="+3">Login</font></td>
<td align="center"><a href="https://www.facebook.com"><img src="gambar/fb.jpg" width="35" height="35"/></a> 
					<a href="https://twitter.com"><img src="gambar/twit.jpg" width="35" height="35"/></a>
					<a href="http://whatsapp.com"><img src="gambar/wa.jpg" width="35" height="35"/></a>
					<a href="https://yahoo.com"><img src="gambar/yahoo.jpg" width="35" height="35"/></a>
					<a href="http://instagram.com"><img src="gambar/insta.jpg" width="35" height="35"/></a>
					<a href="https://plus.google.com"><img src="gambar/google.jpg" width="35" height="35"/></a>
</td>
</tr>
<tr height="20">
<td width="50" colspan="5" align="center">
<?php
	while($gallery = mysqli_fetch_assoc($hasil)){
?>
<img src="<?php echo $gallery['file'];?>"/><br>
<?php  } ?> </td>
<td rowspan="2" align="center" width="250"><video controls>
<?php
	$video = mysqli_fetch_assoc($hasil2);
?>
<source src="<?php echo $video['file'];?>"/>
</video></td>
</tr>
<tr>
<td colspan="5" width="500" align="justify"><font size="+2">

<?php
	while($page = mysqli_fetch_assoc($hasil1)){
?>
<?php echo $page['menu_name'];?><br>
<?php echo $page['content'];?><br>
<?php } ?> </td>
</tr>
<tr height="30">
<td colspan="6">@copyright2014</td>
</tr>
</table>
</body>
</html>