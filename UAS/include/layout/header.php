<?php
	if(!isset($layout_context)){
		$layout_context = "public";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Macaron Corporation<?php if($layout_context == "admin") { echo "admin";} ?></title>
		<link rel="stylesheet" type="text/css" href="stylesheets/public.css"/>
	</head>
	<body>
		<div id="header">
			<h1>Macaron <?php if($layout_context == "admin") { echo "admin";} ?></h1>
		</div><!--header-->