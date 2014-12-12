<?php require_once("../include/session.php");?>
<?php require_once("../include/db_connection.php");?>
<?php require_once("../include/function.php");?>
<?php confirm_logged_in(); ?>
<?php $layout_context = "admin"?>
<?php	include("../include/layout/header.php");?>
<?php
	$sql = "SELECT * FROM coment";
	$hasil = mysqli_query($koneksi,$sql);
?>
<html>
<head>
	<title>Coment</title>
</head>
<body>
<?php
	while($baris =mysqli_fetch_assoc($hasil)){
?>
		<?php echo $baris['nama'];?><br>
		<?php echo $baris['koment'];?></span><br>
		<?php echo $baris['pelayanan'];?><br><br>
<?php } ?>
<tr><a href="admin.php">Cancel</a></tr>
</body>
</html>