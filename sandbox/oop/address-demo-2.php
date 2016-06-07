<?php
/**
 * Define autoloader
 * @param string $class_name
 */
function __autoload($class_name) {
	include 'class.' . $class_name . '.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Examples| Address Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="wrapper">
		<?php 	
		echo "<h3>Instantiating Address</h3>";
		$address_residence = new AddressResidence();
		
		echo "<h3>Setting properties</h3>";
		$address_residence->street_address_1 = "10050 Metro Lane";
		$address_residence->street_address_2 = "Suite 100";
		$address_residence->city_name = "San Jose";
		$address_residence->state_name = "CA";
		$address_residence->postal_code = "95124";
		$address_residence->country_name = "US";
		echo $address_residence;
		echo '<tt><pre>' . var_export($address_residence, TRUE) . '</pre></tt>';
		
		echo "<h3>Testing Address __construct with an array</h3>"; 
		$address_business = new AddressBusiness(array(
			'street_address_1' => "123 Any Way",
			'street_address_2' => "Suite 240",
			'city_name' => "Santa Clara",
			'state_name' => "CA",
			'postal_code' => "95464",
			'country_name' => "US"
		));
		echo $address_business;
		echo '<tt><pre>' . var_export($address_business, TRUE) . '</pre></tt>';
		?>	
	</div>
</body>
</html>