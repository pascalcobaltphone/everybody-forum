<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Everybody ⇆ Forum</title>
	<meta name="description" content="Welcome to Everybody-Forum!">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<a style="font-size: 15px" href="index.php">⇱</a> <strong><a class="active" href="index.php">Forum</a></strong>
			<p>Open for everyone</p>
		</header>
		<section class="content">
			<nav>
				<ol>
					<?php
					print_list();
					?>
				</ol>
			</nav>
