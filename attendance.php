<?php
include('cors.php');

$months = [
	[
		"month_number" => 1,
		"month" => "Baishakh",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [1, 6, 13, 19, 20, 25, 27]
	],
	[
		"month_number" => 2,
		"month" => "Jestha",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 32,
		"holiday" => [3, 10, 17, 24, 31]
	],
	[
		"month_number" => 3,
		"month" => "Ashadh",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [6, 13, 20, 27]
	],
	[
		"month_number" => 4,
		"month" => "Shrawan",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 32,
		"holiday" => [3, 10, 17, 20, 24, 31]
	],
	[
		"month_number" => 5,
		"month" => "Bhadra",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [5, 6, 10, 13, 16, 19, 20, 25, 27]
	],
	[
		"month_number" => 6,
		"month" => "Ashwin",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 30,
		"holiday" => [3, 10, 17, 24]
	],
	[
		"month_number" => 7,
		"month" => "Kartik",
		"year" => 2077,
		"startDay" => 6,
		"totalDays" => 30,
		"holiday" => [1, 7, 8, 9, 10, 11, 15, 22, 29, 30]
	],
	[
		"month_number" => 8,
		"month" => "Mangsir",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 30,
		"holiday" => [1, 5, 6, 13, 20, 27]
	],
	[
		"month_number" => 9,
		"month" => "Poush",
		"year" => 2077,
		"startDay" => 3,
		"totalDays" => 29,
		"holiday" => [4, 10, 11, 15, 18, 25]
	],
	[
		"month_number" => 10,
		"month" => "Magh",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 30,
		"holiday" => [1, 3, 10, 17, 24, 30]
	],
	[
		"month_number" => 11,
		"month" => "Falgun",
		"year" => 2077,
		"startDay" => 6,
		"totalDays" => 29,
		"holiday" => [1, 4, 8, 15, 22, 24, 27, 29]
	],
	[
		"month_number" => 12,
		"month" => "Chaitra",
		"year" => 2077,
		"startDay" => 0,
		"totalDays" => 31,
		"holiday" => [1, 7, 14, 15, 16, 21, 28, 29]
	]
];

$today = date('d') - 13;
$thisMonth = date('m') - 3;

$requestedMonth = ( isset($_GET['month']) ) ? $_GET['month'] : $thisMonth;
if ( $requestedMonth < 1 || $requestedMonth > 12 ) $requestedMonth = 1;
if ( $requestedMonth != $thisMonth ) $today = 0;

$data = $months[$requestedMonth - 1];
$data['label'] = [
	"active" => [$today],
	"inactive" => [rand(1, ($today-1)), rand(1, ($today-1))],
	"holiday" => $data['holiday']
];
$data['legend'] = [
	"active" => "Today",
	"inactive" => "Absent",
	"holiday" => "Holiday"
];

echo json_encode($data);

