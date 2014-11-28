<DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo "$pageTitle"; ?></title>
	<!-- 1. Link to jQuery (1.8 or later), -->
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> <!-- 32 KB -->

		<!-- fotorama.css & fotorama.js. -->
		<link  href="http://fotorama.s3.amazonaws.com/4.3.0/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
		<script src="http://fotorama.s3.amazonaws.com/4.3.0/fotorama.js"></script> <!-- 12 KB -->

	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
</head>
<body>
	<div class="container clearfix">
		<div class="grid_12 behind_monogram">
			<img class="monogram" src="img/monogram.png">
		
			<!-- Navigation bar links -->
			<div class="grid_12">
				<ul class="nav">
					<a href="About_Joel.php"><li class="joel <?php echo ($link == "joel") ? "underline" : "" ?>">About Joel</li></a>
					<a href="about_becky.php"><li class="becky <?php echo ($link == "becky") ? "underline" : ""  ?>">About Becky</li></a>
					<a href="life_together.php"><li class="life_together <?php echo ($link == "life_together") ? "underline" : "" ?>">Life Together</li></a>
					<a href="journey.php"><li class="journey <?php echo ($link == "journey") ? "underline" : "" ?>">The Journey</li></a>
					<a href="index.php"><li class="follow <?php echo ($link == "follow") ? "underline" : "" ?>">Follow Our Journey</li></a>
					<a href="photo_album.php"><li class="photo <?php echo ($link == "photo") ? "underline" : "" ?>">Photo Album</li></a>
			</div>
		</div>