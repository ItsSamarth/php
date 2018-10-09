<?php

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkbox star checked</title>
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/rating.css">
	
</head>
<body>
<div class="container" style="margin-top: 35px">
	<div class="ratings">
		<input type="radio" name="star" id="rating" value="1">
		<input type="radio" name="star" id="rating" value="2">
		<input type="radio" name="star" id="rating" value="3">
		<input type="radio" name="star" id="rating" value="4">
		<input type="radio" name="star" id="rating" value="5">
	</div>
	<br>
	<span class="info" value=""></span>
</div>
</body>
<script
	  	src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="css/rating.js"></script>

<script type="text/javascript">
	$('.ratings').rating(function(vote,event){
		$.ajax({
			method:'POST',
			url: 'action.php',
			data: {vote:vote}
		}).done(function(info){

			$('.info').html("Your vote: <b>"+info+"</b>")
			
		})
		})

</script>

</html>