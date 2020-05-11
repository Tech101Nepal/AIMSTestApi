<?php
include('cors.php');

$data = [
	"month" => "Baishakh",
	"year" => "2077",
	"startDay" => 1,
	"totalDays" => 31,
	"label" => [
		"active" => [24],
		"inactive" => [11, 12],
		"holiday" => [1, 6, 13, 19, 20, 25, 27]
	],
	"legend" => [
		"active" => "Today",
		"inactive" => "Absent",
		"holiday" => "Holiday"
	]
];

echo json_encode($data);

