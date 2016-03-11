<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank You</title>
</head>

<body>

<?php
//variables
$name=$_POST["name"];
$address=$_POST["street"];
$city=$_POST["zip"];
$qty_unpopped=$_POST["qty_unpopped"];
$qty_caramel=$_POST["qty_caramel"];
$qty_caranut=$_POST["qty_caranut"];
$qty_toffee=$_POST["qty_toffee"];
$num1=3.00;
$num2=3.50;
$num3=4.50;
$num4=5.00;
$card=$_POST["card"];
 //box 1
  function multiply($x, $y){
	  $result= $x * $y;
	  return $result;
  }
  
  
   function add($num_array){
	  
	  $arrlength = count($num_array);
	  $sum=0;
	 
	 for($x = 0; $x < $arrlength; $x++) {
     $sum=$sum + $num_array[$x];
}
	  
	  return $sum;
  }

?>


<h1> Thank You for Your Order</h1>
		
			<table>
				
				<tr>
					
					<td><?php echo "Name you entered: $name <br>"?></td>
				</tr>
					<tr>
						
						<td><?php echo "Address you entered: $address <br>"?></td>
					</tr>
				
					<tr>
						
						<td><?php echo "Area of residence you entered: $city <br>"?></td>
					</tr>
			</table>
		
		<h2>Order Information</h2>
<table border="1" style= "padding: 1px">
			
			<tr>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Item Cost</th>
				</tr>
				<tr>
					<td>Unpopped Popcorn(1lb.)</td>
					<td>$3.00</td>
					<td><?php echo $qty_unpopped; ?></td>
					<td><?php $x1=multiply($qty_unpopped, $num1);
                              echo "$".$x1; ?></td>
				</tr>
					<tr>
						<td>Caramel Popcorn(2lb. canister)</td>
						<td>$3.50</td>
						<td><?php echo $qty_caramel; ?></td>
						<td><?php  $x2=multiply($qty_caramel, $num2); echo "$".$x2;?></td>
					</tr>
					<tr>
						<td>Caramel Nut Popcorn(2lb. canister)</td>
						<td>$4.50</td>
						<td><?php echo $qty_caranut; ?></td>
						<td><?php $x3=multiply($qty_caranut, $num3); echo "$".$x3;?></td>
					</tr>
					<tr>
						<td>Toffee Nut Popcorn(2lb. canister)</td>
						<td>$5.00</td>
						<td><?php echo $qty_toffee; ?></td>
						<td><?php  $x4=multiply($qty_toffee, $num4); echo "$".$x4;?></td>
					</tr>
				</table>
				
				<?php $total=array($x1,$x2,$x3,$x4);?>
<p>The total sum of your order is:<?php echo "$"; echo add($total); ?></p>
<p>Your method of payment is: <?php echo $card;?></p>


</body>
</html>


