<?php
$votes = $_POST['vote'];
echo $votes;
?> 

<div style='color:#ffc107;'>

<?php for($i=1; $i<=$votes; $i++) {
	echo "&#9733;";
}?>
</div>