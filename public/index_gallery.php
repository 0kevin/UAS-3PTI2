<?php
	include("koneksi.php");
	
	$sql = "SELECT * FROM gallery";
	$hasil = mysqli_query($koneksi,$sql);
?>
<html>
<head>
	<title>Gallery</title>
	<style>
		.frame{
		width:300px;
		height: 300px;
		display:inline-block;
		}
		
		.frame img{
			width:280px;
			height: 150px;
		}
	</style>
</head>
<body>
<?php
	while($baris =mysqli_fetch_assoc($hasil)){
?>
	<div class="frame">
		<img src="<?php echo $baris['file'];?>"/><br>
		<span class="title"><?php echo $baris['title'];?></span><br>
		<span class="body"><?php echo $baris['body'];?></span>
	</div>
<?php } ?>
</body>
</html>