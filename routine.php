<?php
include('cors.php');
$periods = [
	[
		"time" => "9:10 - 10:05",
		"subject" => "English",
		"teacher" => "Mr. Utsav Bhattarai"
	],
	[
		"time" => "10:05 - 10:50",
		"subject" => "Maths",
		"teacher" => "Mrs. Kamala Devi"
	],
	[
		"time" => "11:00 - 11:45",
		"subject" => "Health",
		"teacher" => "Mr. Ashutosh Gartaula"
	],
	[
		"time" => "11:45 - 12:30",
		"subject" => "Nepali",
		"teacher" => "Mrs. Ful Maya"
	],
	[
		"time" => "1:00 - 1:45",
		"subject" => "Science",
		"teacher" => "Mr. Rupesh Shrestha"
	],
	[
		"time" => "1:45 - 2:30",
		"subject" => "Opt. Maths",
		"teacher" => "Mr. Bikram Lama"
	],
	[
		"time" => "2:40 - 3:25",
		"subject" => "Computer",
		"teacher" => "Mr. Ujjawal Bhattarai"
	],
	[
		"time" => "3:25 - 4:10",
		"subject" => "Social Studies",
		"teacher" => "Mr. Rajendra Pun"
	]
];
$legend = [
	[
		"title" => "Class",
		"description" => "II 'A'"
	],
	[
		"title" => "Course",
		"description" => "Opt. Maths"
	]
];

$day = ( isset($_GET['day']) ) ? $_GET['day'] : date('N');
if ( $day < 0 || $day > 6 ) $day = 0;

$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$data = [
	"legend" => $legend,
	"day" => $day,
	"header" => [
		"day" => $days[$day]
	],
	"periods" => $periods
];

echo json_encode($data);