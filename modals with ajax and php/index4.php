<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>modals</title>

	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css
">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<br>
<div class="container">
	<h3 align="center">Making Login Form by using  Bootstrap model with php and Ajax</h3>
</div>

<br><br><br><br>
<div align="center">
<!-- Calling bootstrap models from here -->

<button type="button" name="give_rating" id="give_rating" class="btn btn-success" data-toggle="model" data-target="#loginModal">Give Ratings</button>	
</div>


</body>
</html>




<!-- Bootstrap models must be seprated from the main html pages and the call to them should be done from inside the main html -->

<div class="loginModal" class="Modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times</button>
				<!-- Display modal title -->
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				<label>Rating</label>
				<input type="text" name="leader_rating" id="leader_rating" class="form-control">
				<br>
				<label>Comment</label>
				<input type="text" name="leader_comment" id="leader_comment" class="form-control">
				<br>
				<button type="button" name="rating" id="rating" class="btn btn-warning">Submit</button>
			</div>
		</div>
	</div>
</div>