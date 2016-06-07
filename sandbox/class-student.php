<?php

class Student {
	static $total_students = 0;
	
	static public function add_student() {
		Student::$total_students++;
	}
	
	static function welcome_students($var = "Hello") {
		echo "{$var} students.";
	}
}

echo Student::$total_students . "<br />";
echo Student::welcome_students() . "<br />";
echo Student::welcome_students("Greetings") . "<br />";
Student::$total_students = 1;
Student::add_student();
echo Student::$total_students . "<br />";

?>