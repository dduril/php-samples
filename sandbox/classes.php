<?php
include "includes\library.php";
getHeader("PHP Examples| Classes");
?>
	<header>
		<h1>PHP</h1>
		<h2>Classes</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		class Person{
		
			var $first_name = "John";
			var $last_name = "Smith";
			
			function full_name() {
				return $this->first_name . " " . $this->last_name;
			}
			function say_hello(){
				echo "Hello from " . get_class($this) . "<br />";
			}	
			
			function hello() {
				$this->say_hello();
			}
		}
		
		$p1 = new Person();
		
		$p1->say_hello();
		
		$p1->hello();
		
		echo $p1->full_name() . "<br />";
		
		echo get_class($p1) . "<br />";
		?>
		<br />
		<hr>
		
		<?php
		$classes = get_declared_classes();
		foreach($classes as $class){
			if ($class == 'Person') {
				echo $class . "<br />";
			}
		}
		?>
		<br />
		<?php
		if(class_exists("Person")){
			echo "That class has been defined.<br />";
		} else {
			echo "Class not defined.<br />";
		}
		?>
		<br />
		<?php
		$methods = get_class_methods('Person');
		foreach($methods as $method){
			echo $method . "<br />";
		}
		?>
		<br />
		<?php
		if(method_exists('Person', 'say_hello')){
			echo "Method does exist.<br />";
		} else {
			echo "Method does not exist.<br />";
		}
		?>
		<?php
		$vars = get_class_vars('Person');
		foreach($vars as $var => $value){
			echo "{$var}: {$value}<br />";
		}
		?>
		<br />
	</div>
<?php
getFooter();
?>	