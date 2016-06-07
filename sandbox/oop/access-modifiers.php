<?php
/*
 *
 * Access Modifiers Example
 *
 */
class Example {
	public $a = 1;
	protected $b = 2;
	private $c = 3;
	
	function show_abc() {
		echo $this->a . " ";
		echo $this->b . " ";
		echo $this->c . "<br />";
	}
	
	public function hello_everyone() {
		return "Hello everyone.<br />";
	}
	
	public function hello_family() {
		return "Hello family.<br />";
	}
	
	public function hello_me() {
		return "Hello me.<br />";
	}
	
	// public by default
	function hello() {
		$output = $this->hello_everyone();
		$output .= $this->hello_family();
		$output .= $this->hello_me();
		return $output;
	}
}

class ExampleSub extends Example{

}

$example = new Example();
echo "public a: {$example->a}<br />";
//echo "protected b: {$example->b}<br />";
//echo "private c: {$example->c}<br />";
$example->show_abc();
echo $example->hello_everyone();
echo $example->hello();

echo "<br />";

$example_sub = new ExampleSub();
$example_sub->show_abc();
echo $example->hello();
?>