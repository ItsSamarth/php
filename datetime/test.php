<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
</head>
<body>
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
	$.get('time.php', function(data) {
		console.log(data);
		var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
		var data2 = '2012-02-28T23:53:27';
  var serverDate = new Date(data);
  // var testDate = new Date(data2);
  console.log(serverDate);
  // console.log(testDate.toLocaleString("en-IN"));   // formatting type 1
  console.log(serverDate.toLocaleString("en-IN",options));   //formatting type 2
  console.log(serverDate.toLocaleString());
  console.log(serverDate.toLocaleDateString());
  console.log(serverDate.toLocaleTimeString());

});
</script>