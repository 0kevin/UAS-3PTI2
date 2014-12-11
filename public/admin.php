<?php include("../include/layout/header.php");?>
<?php $layout_context = "admin";?>	
<?php require_once("../include/function.php");?>
		<div id="main">
		<div id="navigation">
			&nbsp;
		</div>
		<div id="page">
			<h2>Admin Menu</h2>
			<p>Welcome to the Admin Server</p>
			<ul>
				<li><a href="manage_content.php">Manage Website Content</a></li>
				<li><a href="manage_admins.php">Manage admins user</a>
				</li>
				<li><a href="admin_gallery.php">upload gambar</a></li>
				<li><a href="admin_video.php">upload video</a></li>
				<li><a href="admin_logo.php">upload logo</a></li>
				<li><a href="coment.php">Lihat Coment</a></li>
				<li><a href="Home.php">Home pages</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		</div>
<?php include("../includes/layout/footer.php");?>	