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
	<h3>pre-emptive FAQ:</h3>

	<h4>what is a tiny instrument?</h4>
	- "tiny instruments" are less a class of instrument and more a philosophy of music-making that emphasises a more informal style of music. however, in general, if your instrument is a "smaller version" of an existing one - a ukulele, melodica, toy piano etc - then it counts!

	<h4>what does the tiny instrument society do?</h4>
	- covid allowing, we will try to meet once a week for a "jam sesh" where we will play music, discuss or just hang out. we might also set up a zoom version for those interested.

	<h4>do i need to be able to play a tiny instrument?</h4>
	- no! we set up this society to appeal to more amateur musicians, and as long as you're interested in having fun you're more than welcome to spectate, or, even better, play badly!

	<h4>what can i do to join?</h4>
	- due to our unofficial status, we don't have any formal joining ceremony. however, if you want to find out more, you can drop into any of our meetings or subscribe to our mailing list.
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
