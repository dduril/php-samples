<?php
require 'class.Address.php';
require 'class.Database.php';
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
		$address = new Address();
		
		echo "<h3>Empty Address</h3>";
		echo "<tt><pre>" . var_export($address, TRUE) . "</pre></tt>";
		
		$address->street_address_1 = "10050 Metro Lane";
		$address->street_address_2 = "Suite 100";
		$address->city_name = "San Jose";
		$address->state_name = "CA";
		$address->postal_code = "95124";
		$address->country_name = "US";
		$address->address_type_id = 1;
		echo "<h3>Setting Properties</h3>";
		echo "<tt><pre>" . var_export($address, TRUE) . "</pre></tt>";
		
		echo "<h3>Displaying Address</h3>";
		echo $address->display();
		
		//echo "<h3>Testing protected access.</h3>"; 
		//echo "Address ID: {$address->_address_id}";
		
		echo "<h3>Testing magic __get and __set</h3>"; 
		unset($address->postal_code);
		echo $address->display();
		
		echo "<h3>Testing Address __construct with an array</h3>"; 
		$address_2 = new Address(array(
			'street_address_1' => "123 Any Way",
			'street_address_2' => "Suite 240",
			'city_name' => "Santa Clara",
			'state_name' => "CA",
			'postal_code' => "95464",
			'country_name' => "US"
		));
		echo $address_2->display();
		
		echo "<h3>Address __toString</h3>"; 
		echo $address;
		
		echo "<h3>Displaying address types</h3>"; 
		echo "<tt><pre>" . var_export(Address::$valid_address_types, TRUE) . "</pre></tt>";
		
		echo "<h3>Testing address type ID validation</h3>"; 
		for ($id = 0; $id <= 4; $id++) {
			echo "<div>$id: ";
			echo Address::isValidAddressTypeId($id) ? 'Valid' : 'Invalid';
			echo "</div>";
		}
		?>	
	</div>
</body>
</html>