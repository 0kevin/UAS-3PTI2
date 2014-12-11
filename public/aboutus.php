<?php require_once("../include/db_connection.php");?>
<?php
$sql3 = "SELECT * FROM logo";
	$hasil3 = mysqli_query($koneksi,$sql3);
?>
<?php
$sql2 = "SELECT * FROM video";
	$hasil2 = mysqli_query($koneksi,$sql2);
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
<td colspan="7" align="center"><marquee><font size="+2">GKSBB's Macaroon - GKSBB's Macaroon - GKSBB's Macaroon</font></marquee></td>
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
<td width="50" colspan="5" align="center"><img src="gambar/gksbb.jpg" width="300" height="330"></td>
<td rowspan="2" align="center" width="250"><video controls>
<?php
	$video = mysqli_fetch_assoc($hasil2);
?>
<source src="<?php echo $video['file'];?>"/>
</video></td></tr>
<tr>
<td colspan="5" height="200" align="justify"><font size="+2">Mengapa kita membuka bisnis macaron? Tentu saja karena kita menyukai kue, apalagi kue yang 1 ini rasanya berbeda dan agak unik juga. Maka itu kita menjalankan bisnis ini. Warna yang unik, bentuk yang unik, tekstur yang lembut membuat kue ini menjadi salah 1 kue yang bernilai tinggi dan banyak disukai anak-anak maupun orang dewasa. Harganya pun seperti harga pasaran biasanya, jadi anda tidak perlu khawatir untuk membeli kue ini.<p>Untuk saat ini, kami hanya fokus pada marcaroon yang artinya kita tidak menjual barang lain selain marcaroon. Dan marcaroon yang kami jual adalah produk buatan kami sendiri.</p><p>Terima kasih atas kepercayaan Anda.</p></td>
</tr>
<tr height="30">
<td colspan="6">@copyright2014</td>
</tr>
</table>
</body>
</html>