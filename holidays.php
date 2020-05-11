<?php
include('cors.php');

$data = [
	"month" => "Baishakh",
	"year" => "2077",
	"startDay" => 1,
	"totalDays" => 31,
	"label" => [
		"active" => [24],
		"holiday" => [1, 6, 13, 19, 20, 25, 27]
	],
	"holidayLabels" => [
		[
			"day" => 1,
			"label" => "New year 2077"
		],
		[
			"day" => 19,
			"label" => "International Labour Day"
		],
		[
			"day" => 25,
			"label" => "Buddha Jayanti"
		]
	]
];

echo json_encode($data);