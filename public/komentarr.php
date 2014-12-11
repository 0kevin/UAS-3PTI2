<?php require_once("../include/db_connection.php");?>	
<?php require_once("../include/function.php");?>
<?php require_once("../include/validation_function.php");?>
<?php
$sql3 = "SELECT * FROM logo";
	$hasil3 = mysqli_query($koneksi,$sql3);
?>
<?php
$sql2 = "SELECT * FROM video";
	$hasil2 = mysqli_query($koneksi,$sql2);
?>

<?php
	if(isset($_POST["submit"])){
		$nama = mysql_prep($_POST["nama"]);
		$koment = mysql_prep($_POST["koment"]);
		$pelayanan = mysql_prep($_POST["pelayanan"]);
		
		//validations
		$required_fields = array("nama","koment","pelayanan");		
		validate_presences($required_fields);
		
		$fields_with_max_lengths = array("nama" => 30);
		validate_max_lengths($fields_with_max_lengths);
		
		if(!empty($errors)){
			$_SESSION["errors"] = $errors;
			redirect_to("komentarr.php");
		} 
		
		$sql = "INSERT INTO coment (nama, koment, pelayanan)
					VALUES ('{$nama}','{$koment}','{$pelayanan}')";
		$hasil = mysqli_query($koneksi, $sql);
		
		if($hasil){
		//SUCCESS
			$_SESSION["message"] = "Admin created.";
			redirect_to("Home.php");
		} else{
		//FAILURE
			$_SESSION["message"]  = "Admin creation failed.";
		}
	
	} else{
		
	}
?><!DOCTYPE html>
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
<td width="50" colspan="5" align="center">
<table background="gambar/puz.jpg" border="9" height="500" width="550">
<tr>
<form action="komentarr.php" method= "POST">
<td p align="center"><font size="+2">Nama Lengkap</td>
<td p align="center"><input type="text" name="nama"></td>
</tr>
<tr>
<td align="center"><font size="+2">Komentar</td>
<td align="center"><textarea type="textarea" name="koment"></textarea></td>
</tr>
<tr>
<td align="center"><font size="+2">Bagaimana pelayanan kami?</td>
<td align="center"><input type="radio" name="pelayanan" value="baik" />Baik <input type="radio" name="pelayanan" value="kurang baik" />Kurang baik <input type="radio" name="pelayanan" value="tidak baik" />Tidak baik</td>
</tr>
</table>
<input type="submit" name="submit" value="kirim"/><a href="komentarr.php">Cancel</a>
</td>
<td rowspan="2" align="center" width="250"><video controls>
<?php
	$video = mysqli_fetch_assoc($hasil2);
?>
<source src="<?php echo $video['file'];?>"/>
</video></td></tr>
<tr height="30">
<td colspan="6">@copyright2014</td>
</tr>
</table>
</body>
</html>