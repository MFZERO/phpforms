<?php
$capitals = array("Alberta"=>"Edmonton", "Briish Columbia"=>"Victoria", "Manitoba"=>"Winnipeg", "New Brunswick"=>"Fredericton", "Newfoundland and Labrador"=>"St. John's", "Nova Scotia"=>"Halifax", "Ontario"=>"Toronto", "Prince Edward Island"=>"Charlottetown", "Quebec"=>"Quebec City", "Saskatchewan"=>"Regina" );


///foreach($capitals as $value) {
     ///echo $value;
    /// echo "<br>";



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Select a Capital</title>
</head>

<body>


<?php $province= $_GET["province"]; 

echo $capitals[$province];
?>
	


<p>The capital is 

<?php 
$province=$_GET["province"];


switch ($province) {
     case "Alberta":
         echo "Edmonton";
         break;
     case "British Columbia":
         echo "Victoria";
         break;
     case "Manitoba":
         echo "Winnipeg";
         break;
	 case "New Brunswick":
         echo "Fredericton";
         break;
	 case "Newfoundland and Labrador":
         echo "St. John's";
         break;
	 case "Nova Scotia":
         echo "Halifax";
         break;
	 case "Ontario":
         echo "Toronto";
         break;
	 case "Prince Edward Island":
         echo "Charlottetown";
         break;
	 case "Quebec":
         echo "Quebec City";
         break;
	 case "Saskatchewan":
         echo "Regina";
         break;
     default:
         echo "No Province was selected";
}






?>


</p>



</body>
</html>