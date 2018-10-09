<?php
include '../config/db.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Modals for users replies back</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<h1>Modals for user interactivity with the leaders</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Reply back
</button>


</body>
</html>

<!-- Modal -->
<div class="modal fade"   id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Reply Back</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<?php $query = $con->prepare("SELECT * FROM replyback");
        		  $query->execute(); 

        		  while($row = $query->fetch(PDO::FETCH_ASSOC) ) { ?>
        <div class="row" style="border: 1px black solid;">
       
        	<div class="col-sm-4">
        		<h4><?php echo $row['name']; ?></h4>
        	</div>

        	<div class="col-sm-1">
        		<p><?php echo $row['reply']; ?></p>
        	</div>
        </div>

        <?php } ?>
        <div class="row input">
        	<input type="text" name="reply" id="reply">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="replyback" name="replyback" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
	$(document).ready(function(){
		$('#replyback').click(function() {
			var reply = $('#reply').val();
			console.log("Reply="+reply);
			if(reply != '') {

				$.ajax({
					url:"replyback_action.php",
					method:"POST",
					data:{reply:reply},
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
	});
</script>