<?php require_once("../include/session.php");?>
<?php require_once("../include/db_connection.php");?>
<?php require_once("../include/function.php");?>
<?php confirm_logged_in(); ?>
<?php $layout_context = "admin"?>
<?php	include("../include/layout/header.php");?>
<h2>Admin Gallery</h2>
<form action="upload_video.php"
			method="POST"
			enctype="multipart/form-data">
<pre>
Title:
<input type="text"
			name="judul"/><br/>
Body:
<textarea name="body" rows="5" cols="50"></textarea></br>
File:
<input type="file"
			name="video"/><br/>
<input type="submit"
			name="simpan"
			value="Save"/><br/>		
</pre>
</form>
<?php	include("../include/layout/footer.php");?>