<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<h3 id="username" data-user="samarth">Getting data using data attribute and jquery and javascript</h3>
</body>
</html>
<script type="text/javascript">
	var data = document.getElementById("username");
	var users= data.getAttribute("data-user");
	console.log(users);
	alert("Hey your html tag data is "+users);
</script>