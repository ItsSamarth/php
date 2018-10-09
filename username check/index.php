<?php
include '../config/db.php';

?>

<!DOCTYPE html>
<html>
<head>
  
	<title></title>
</head>
<body>
  <div class="container box">  
   <div class="form-group">  
    <h3 align="center">Live Username Available or not By using PHP Ajax Jquery</h3><br />  
    <label>Enter Username</label>  
    <input type="text" name="username" id="username" class="form-control" />
    <span id="availability"></span>
    <br><br>
    <button type="button" name="register" class="btn btn-info" id="register">Register</button>
    <br>
   </div>  
   <br>  
   <br>  
  </div> 
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#username').blur(function(){
			var username = $(this).val();

			$.ajax({
				url:'check.php',
				method:"POST",
				data:{user_name:username},
				success:function(data){
					$('#availability').html(data);
				}
			})
		})
	})
</script>