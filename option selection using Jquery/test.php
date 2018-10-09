<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"> var temp;</script>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
<select id="formchange" onchange="filter(this.value)" )"> 
	<option value="American">American flamingo</option> 
	<option value="Andean">Andean flamingo</option>
	 <option value="Chilean">Chilean flamingo</option>
	  <option value="Greater">Greater flamingo</option> 
	  <option value="James's">James's flamingo</option> 
	  <option value="Lesser">Lesser flamingo</option> 
	</select>
<button type="button" id="submit" name="submit" value="something" onclick="console.log(this.value);">Click Me!</button>

<script type="text/javascript">
	
	function filter(data) {
		temp =data;

		console.log(temp);
		console.log($("#formchange option:selected").text());
		// document.getElementsByTagName("submit").setAttribute("value", "data"); 
		// document.getElementsByTagName("submit").value=data;
		document.getElementById("submit").value=temp;
	}

</script>


</body>
</html>