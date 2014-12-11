<?php require_once("../include/session.php");?>
<?php require_once("../include/db_connection.php");?>
<?php require_once("../include/function.php");?>
<?php confirm_logged_in(); ?>
<?php $layout_context = "admin"?>
<?php	include("../include/layout/header.php");?>
<?php
$judul = $_POST['judul'];
$ket = $_POST['body'];

$file_name = $_FILES['video']['name'];
$file_size = $_FILES['video']['size'];
$file_tmp = $_FILES['video']['tmp_name'];

$file_ext= strtolower(end(explode(".", $file_name)));
$ext_boleh = array("mp4","MP4");

if(in_array($file_ext, $ext_boleh) ){
	//EXT FILE DIPERBOLEHKAN
	if($file_size <= 2*2024*2024){
		
		$sumber = $file_tmp;
		$tujuan = "video/".$file_name;
		move_uploaded_file($sumber, $tujuan);
	
		//2. masukkan query
		$sql = "INSERT INTO video(title, body, file)
					VALUES ('$judul', '$ket', '$tujuan')";
		mysqli_query($koneksi,$sql);
		
		if(mysqli_error($koneksi)){
			echo "Upload video gagal";
			echo mysqli_error($koneksi);
			die();
		}
		//header("Location: index_gallery.php");
	} else{
		echo "Ukuran gambar max 2MB";
	}
} else{
	//EXT FILE DILARANG
	echo "Jenis file yang diperbolehkan hanya video.";
}
?>
<?php	include("../include/layout/footer.php");?>	