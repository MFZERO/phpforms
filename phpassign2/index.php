<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Complete the form</title>
</head>

<body>


<h1> Popcorn Bulk Sale</h1>
		<h3> Enter Your Information Below</h3>
		<form method="post" action="process.php" border="1">
			<table>
				
				<tr>
					<td>Buyers Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
					<tr>
						<td>Street Address:</td>
						<td><input type="text" name="street"></td>
					</tr>
				
					<tr>
						<td>City, Province, Postal Code:</td>
						<td><input type="text" name="zip"></td>
					</tr>
			</table>
		<h3>Order Information</h3>
		<table border="1px">
			
			<tr>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
				</tr>
				<tr>
					<td>Unpopped Popcorn(1lb.)</td>
					<td>$3.00</td>
					<td><input type="text" name="qty_unpopped"></td>
				</tr>
					<tr>
						<td>Caramel Popcorn(2lb. canister)</td>
						<td>$3.50</td>
						<td><input type="text" name="qty_caramel"></td>
					</tr>
					<tr>
						<td>Caramel Nut Popcorn(2lb. canister)</td>
						<td>$4.50</td>
						<td><input type="text" name="qty_caranut"></td>
					</tr>
					<tr>
						<td>Toffee Nut Popcorn(2lb. canister)</td>
						<td>$5.00</td>
						<td><input type="text" name="qty_toffee"></td>
					</tr>
				</table>
				<h3>Payment Method</h3>
				<table>
					<tr>
                  <td><input type = "radio" name = "card" <?php if (isset($card) && $card=="visa") echo "checked";?> value = "visa">Visa</td>
					</tr>
						<tr>
				  <td><input type = "radio" name = "card" <?php if (isset($card) && $card=="mastercard") echo "checked";?>value = "mastercard">Mastercard</td>
						</tr>
                  	<tr>
				  <td><input type = "radio" name = "card" <?php if (isset($card) && $card=="discover") echo "checked";?>value = "discover">Discover</td>
						</tr>
               	<tr>
				  <td><input type = "radio" name = "card" <?php if (isset($card) && $card=="check") echo "checked";?>value = "check">Check</td>
						</tr>
			   </table>
			   <INPUT TYPE = "Submit" Name = "Submit" VALUE = "Submit Order">
			   
				</form>
		
		





</body>
</html>