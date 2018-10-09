<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="../asset/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../asset/Datetime-Picker-jQuery-Moment/css/datetimepicker.css">
</head>
<body>
<div class="container-fluid">
	<br><br>

<!-- 	<div class="input-append date form_datetime">
		 <input size="16" type="text" id="sdate" value="">
    <span class="add-on"><i class="icon-th"></i></span> -->
</div>
<button type="button" onclick="sub()" class="btn btn-primary">Submit</button>

<br><br>


<div class="form-group col-sm-4">
	<div id="picker"> </div>
<input type="hidden" id="result" class="form-control"  value="">
</div>
<br>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="../moment.js"></script>
  <!-- Latest compiled and minified JavaScript -->
	
 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <!-- <script type="text/javascript" src="../asset/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script> -->
 <script src="../moment-with-locales.js"></script>
 <script type="text/javascript" src="../asset/Datetime-Picker-jQuery-Moment/js/datetimepicker.js"></script>
  <script type="text/javascript">
  	 // $(".form_datetime").datetimepicker({
        // format: "dd MM yyyy - hh:ii"
    // });

  	 function sub(){
  	 	var a = $('#result').val();
  	 console.log(a);
  	 }


  	 $('#picker').dateTimePicker({
  	 	dateFormat: "DD-MM-YYYY HH:mm"
  	 	,locale: 'en',
  	 	  selectData: "now",
  positionShift: { top: 20, left: 0},
  title: "Select Date and Time",
  buttonTitle: "Select"

  	 });

  </script>
</body>
</html>
