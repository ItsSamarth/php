<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<input type="button" value="Click Here" id="ajaxButton"/>
<div id="result"></div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    // $("#ajaxButton").click(function() {
        $.ajax({
              type: "Post",
              url: "employee.php",
              success: function(data) {
                    var obj = $.parseJSON(data);      
                    var result = "<ul>"
                    $.each(obj, function() {
                        result = result + "<li>First Name : " + this['name'] + " , Last Name : " + this['designation'] + "</li>";
                    });
                    result = result + "</ul>"
                    $("#result").html(result);
              }
        }); 
    // });
});
</script>