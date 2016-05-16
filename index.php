<?php
	// if the class has already been included, php will not include it again
	require_once 'meekrodb.2.3.class.php';
	DB::$user = 'test';
	DB::$password = 'testPassword!!1';
	DB::$dbName = 'students';
	DB::$host = '127.0.0.1';

	// $students = array('Tristan','Josh','Bogdan','Laz','Keith','Will','Waldo');
	// foreach($students as $student){
	// 	DB::insert('students', array(
	// 		'name' => $student
	// 	));
	// }

	// $student = DB::queryFirstRow("SELECT * FROM students WHERE name=%s", 'Waldo');
	// print 'Waldo is at index ' . $student['id'];

	$numberOfStudents = $_GET['numberOfStudents'];

	$addStudents = $numberOfStudents + 1;
	$subtractStudents = $numberOfStudents - 1;

	if ($numberOfStudents){
		$students = DB::query("SELECT * FROM students LIMIT " . $numberOfStudents);
		foreach ($students as $student){
			print $student['name'];
			print "<hr />";
		}
	}
?>

<p><a href="index.php?numberOfStudents=<?php print $addStudents; ?>">Click to add a student</a></p>

<p><a href="index.php?numberOfStudents=<?php print $subtractStudents; ?>">Click to remove a student</a></p>