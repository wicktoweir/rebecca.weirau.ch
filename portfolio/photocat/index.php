<!DOCTYPE html>

<?php 
	$photos = array();
		$photos[101]=array(
			"name" => "A bench looking over a fall landscape",
			"thumb" => "img/bench.jpg",
			"img" => "img/bench.jpg"
			);
		$photos[102]=array(
			"name" => "A biker riding along a highway lined with trees",
			"thumb" => "img/biker.jpg",
			"img" => "img/biker.jpg"
			);
		$photos[103]=array(
			"name" => "A profile photo of a dog with shadows in background",
			"thumb" => "img/dog1.jpg",
			"img" => "img/dog1.jpg"
			);
		$photos[104]=array(
			"name" => "A line of trees with shadows",
			"thumb" => "img/tree1.jpg",
			"img" => "img/tree1.jpg"
			);
		$photos[105]=array(
			"name" => "A cat walking through shadows",
			"thumb" => "img/cat.jpg",
			"img" => "img/cat.jpg"
			);
		$photos[106]=array(
			"name" => "A profile photo of a dog standing by a patio door",
			"thumb" => "img/dog2.jpg",
			"img" => "img/dog2.jpg"
			);
		$photos[107]=array(
			"name" => "A tangled tree branch with a sunset in the background",
			"thumb" => "img/tree-night.jpg",
			"img" => "img/tree-night.jpg"
			);
		$photos[108]=array(
			"name" => "A construction vehicle on the side of a trail with a tree next to it",
			"thumb" => "img/construction.jpg",
			"img" => "img/construction.jpg"
			);
		$photos[109]=array(
			"name" => "A fall tree with a bench below it",
			"thumb" => "img/bench-tree.jpg",
			"img" => "img/bench-tree.jpg"
			);
?>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CAT&ndash;alog</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!-- 1. Link to jQuery (1.8 or later), -->
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> <!-- 32 KB -->
	<script type="text/javascript" src="jQuery/photocat.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=New+Rocker' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
</head>
<body>
	<div class="container clearfix">
		<div class="grid_12 title">
			<h1>Photo CAT <span>Start Your Week Right!</span></h1>
		</div>


		<div class="grid_9">
			<ul>
			<?php foreach ($photos as $photo) {
				echo "<li>";
				echo '<a class="thumb_link" href="' . $photo['img'] . '"">';
				echo '<img class="thumb" src="' . $photo["thumb"] . '"alt="' . $photo["name"] . '">';
				echo "</a>";
				echo "</li>";
			} ;?>
			</ul>
		</div>

		<div class="grid_3 omega">
			<h2>Our Weekly CAT&ndash;alog</h2>
			<p>Here at Photo CAT we are not just about pictures of cats, we are about all styles. The catch is, we only feature nine photos per week. Like a cat has "nine lives", we too live by nines! No frills, just great photos! Take a look at this week&rsquo;s nine.</p>
			<img class="photocat" src="img/photo_cat.jpg">
		</div>
	</div>
	<div class="overcontainer">
		<div class="overbox">
			<div>
				<a class="close" href="">Close</a>
			</div>
			<div>
				<img id="overbox_img" class="img" src="" />
			</div>
		</div>
	</div>
	
</body>
</html>