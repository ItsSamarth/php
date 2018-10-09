<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<!-- Button trigger modal -->

<br>
<div class="container">
	<h3 align="center">Making Login Form by using  Bootstrap model with php and Ajax</h3>
</div>

<!-- when the user is already logged in so we don't need to show login button -->
<?php if(isset($_SESSION['username'])) {
?>
<div align="center">
	<h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br>
	<a href="#" id="logout">Logout </a>
</div>

<?php } 

else {
?>
	<div align="center">
		<button type="button" name="login" id="login" class="btn btn-success">Login</button>
	</div>

<?php  }  ?>


<button type="button" name="give_rating" id="give_rating" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 <div align="center">
 	 Launch demo modal
 
</button></div>





</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Users Ratings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Rating</label>
				<input type="text" name="rating" id="rating" class="form-control">
				<br>
				<label>Comment</label>
				<input type="text" name="comment" id="comment" class="form-control">
				<br>
				
      </div>
      <div class="modal-footer">
        
       <button type="button" name="submit_rating" id="submit_rating" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('#submit_rating').click(function() {
			var ratings = $('#rating').val();
			var comment = $('#comment').val();
			console.log("Ratings="+ratings);
			if(ratings != '' && comment != '') {

				$.ajax({
					url:"action.php",
					method:"POST",
					data:{ratings:ratings, comment:comment},
					success: function(data) {

						if(data == 'No') {
							alert("wrong data");
						}

						else {
							$('#exampleModalCenter').hide();
							location.reload();
						}

					}
				});
			}
			else {
				alert("Both Fields are required");
			}
		});

		$('#logout').click(function(){
			var action = "logout";
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{action:action},
				success:function() {
					location.reload();
				}
			});
		});
	});
</script>