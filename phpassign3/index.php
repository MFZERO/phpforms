<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Select a Capital</title>
</head>

<body>
<?php 
$capitals = array("Alberta"=>"Edmonton", "British Columbia"=>"Victoria", "Manitoba"=>"Winnipeg", "New Brunswick"=>"Fredericton", "Newfoundland and Labrador"=>"St. John's", "Nova Scotia"=>"Halifax", "Ontario"=>"Toronto", "Prince Edward Island"=>"Charlottetown", "Quebec"=>"Quebec City", "Saskatchewan"=>"Regina" );
         ?>
<p>
Please choose a province:
<form method="get" action="process.php">
    <select name="province">
        <option selected="selected">Choose one</option>
        <?php
        // 
        
		
		
		
        // 
        foreach($capitals as $key => $value){
        ?>
        <option value="<?php echo($key); ?>"><?php echo $key; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Submit">
	</form>





</body>
</html>