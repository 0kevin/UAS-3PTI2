<div id="footer">
			Copyright <?php echo date("Y");?> &copy; ABC
		</div><!--footer-->
	</body>
</html>
<?php
//5. tutup koneksi
if(isset($koneksi)){
	mysqli_close($koneksi);
}
?>