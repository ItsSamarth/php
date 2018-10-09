<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
		<form action="demo.php" method="post">
			  <label><input type='checkbox' name='productinfo[]' value='get_name1 get_quantity1 wc_price1'> get_name1 get_quantity1 wc_price
				</div>
			  <label><input type='checkbox' name='productinfo[]' value='get_name2 get_quantity2 wc_price2'> get_name2 get_quantity2 wc_price
			</div>
			  <label><input type='checkbox' name='productinfo[]' value='get_name2 get_quantity3 wc_price3'> get_name2 get_quantity3 wc_price
			</div>
			
			<input type="submit" name="submit">
		</form>
</body>
</html>



<form action="demo.php" method="post">
<?php

foreach ( wc_get_order( $ordernumber )->get_items() as $item ){
                echo "<input type='checkbox' name='productinfo[]' value='".$item->get_name(). $item->get_quantity() .$item->get_quantity()"'>";
            }


    ?>

  <input type="submit" name="submit">
</form>