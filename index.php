<!doctype html>

<html>

<title>tiny instrument society</title>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="meta/style.css">
</head>

<body>
	<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= '/meta/header.php'; 
		include $path
	?>
	
	<div class="bar" id="bar"> </div>
	
	<div class="para" id="faq">
	<p>
	<h3>oxford tiny instrument society:</h3>

	welcome to the official website of the Oxford Tiny Instrument Society! we're a group of small instrument enthusiasts who wanted to set up a society for the appreciation and playing of smol instruments.
	<br>
	this website is still in its infancy, but if you're interested in joining, you can read our faq or <a href="ismael.carlosse@jesus.ox.ac.uk"> email one of us </a>.
	
	</p>
	</div>

	<div class="bar" id="bar2"> </div>
	
	<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= '/meta/footer.php'; 
		include $path
	?>

	<script src="meta/bars.js"></script>
	
	<script>
		addBar("bar");
		addBar("bar2");
	</script>
</body>

</html>
