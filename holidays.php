<?php
include('cors.php');

$months = [
	[
		"month_number" => 1,
		"month" => "Baishakh",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [1, 6, 13, 19, 20, 25, 27],
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
	],
	[
		"month_number" => 2,
		"month" => "Jestha",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 32,
		"holiday" => [3, 10, 17, 24, 31],
		"holidayLabels" => []
	],
	[
		"month_number" => 3,
		"month" => "Ashadh",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [6, 13, 20, 27],
		"holidayLabels" => []
	],
	[
		"month_number" => 4,
		"month" => "Shrawan",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 32,
		"holiday" => [3, 10, 17, 20, 24, 31],
		"holidayLabels" => [
			[
				"day" => 20,
				"label" => "Gai Jatra"
			]
		]
	],
	[
		"month_number" => 5,
		"month" => "Bhadra",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 31,
		"holiday" => [5, 6, 10, 13, 16, 19, 20, 25, 27],
		"holidayLabels" => [
			[
				"day" => 5,
				"label" => "Haritalika Teej"
			],
			[
				"day" => 10,
				"label" => "Gaur Parwa"
			],
			[
				"day" => 16,
				"label" => "Indra Jatra"
			],
			[
				"day" => 25,
				"label" => "Jitiya Parwa"
			]
		]
	],
	[
		"month_number" => 6,
		"month" => "Ashwin",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 30,
		"holiday" => [3, 10, 17, 24],
		"holidayLabels" => [
			[
				"day" => 3,
				"label" => "Sambidhan Diwash"
			]
		]
	],
	[
		"month_number" => 7,
		"month" => "Kartik",
		"year" => 2077,
		"startDay" => 6,
		"totalDays" => 30,
		"holiday" => [1, 7, 8, 9, 10, 11, 15, 22, 29, 30],
		"holidayLabels" => [
			[
				"day" => 7,
				"label" => "Fulpati"
			],
			[
				"day" => 8,
				"label" => "Mahasthami Brata"
			],
			[
				"day" => 9,
				"label" => "Mahanawami Brata"
			],
			[
				"day" => 10,
				"label" => "Bijaya Dashami"
			],
			[
				"day" => 11,
				"label" => "Yekadashi"
			],
			[
				"day" => 29,
				"label" => "Laxmi Puja"
			],
			[
				"day" => 30,
				"label" => "Maa Puja"
			]
		]
	],
	[
		"month_number" => 8,
		"month" => "Mangsir",
		"year" => 2077,
		"startDay" => 1,
		"totalDays" => 30,
		"holiday" => [1, 5, 6, 13, 20, 27],
		"holidayLabels" => [
			[
				"day" => 1,
				"label" => "Bhai Tika"
			],
			[
				"day" => 5,
				"label" => "Children's Day"
			]
		]
	],
	[
		"month_number" => 9,
		"month" => "Poush",
		"year" => 2077,
		"startDay" => 3,
		"totalDays" => 29,
		"holiday" => [4, 10, 11, 15, 18, 25],
		"holidayLabels" => [
			[
				"day" => 10,
				"label" => "Christmas"
			],
			[
				"day" => 15,
				"label" => "Udhauli Parwa"
			]
		]
	],
	[
		"month_number" => 10,
		"month" => "Magh",
		"year" => 2077,
		"startDay" => 4,
		"totalDays" => 30,
		"holiday" => [1, 3, 10, 17, 24, 30],
		"holidayLabels" => [
			[
				"day" => 1,
				"label" => "Maghe Sangranti"
			],
			[
				"day" => 30,
				"label" => "Sonam Loshar"
			]
		]
	],
	[
		"month_number" => 11,
		"month" => "Falgun",
		"year" => 2077,
		"startDay" => 6,
		"totalDays" => 29,
		"holiday" => [1, 4, 8, 15, 22, 24, 27, 29],
		"holidayLabels" => [
			[
				"day" => 4,
				"label" => "Basanta Panchami"
			],
			[
				"day" => 24,
				"label" => "Naari Diwash"
			],
			[
				"day" => 27,
				"label" => "Shivaratri"
			]
		]
	],
	[
		"month_number" => 12,
		"month" => "Chaitra",
		"year" => 2077,
		"startDay" => 0,
		"totalDays" => 31,
		"holiday" => [1, 7, 14, 15, 16, 21, 28, 29],
		"holidayLabels" => [
			[
				"day" => 1,
				"label" => "Min Sangranti"
			],
			[
				"day" => 15,
				"label" => "Falgu Purnima"
			],
			[
				"day" => 16,
				"label" => "Tarai Falgu Purnima"
			],
			[
				"day" => 21,
				"label" => "Ghode Jatraa"
			]
		]
	]
];

$today = date('d') - 13;
$thisMonth = date('m') - 3;

$requestedMonth = ( isset($_GET['month']) ) ? $_GET['month'] : $thisMonth;
if ( $requestedMonth < 1 || $requestedMonth > 12 ) $requestedMonth = 1;

$data = $months[$requestedMonth - 1];
if ( $requestedMonth != $thisMonth ) $today = $data['totalDays'];
if ( $requestedMonth > $thisMonth ) $today = 1;
$inactive = ( $requestedMonth > $thisMonth ) ? [] : [rand(1, ($today-1)), rand(1, ($today-1))];

$data['label'] = [
	"active" => [$today],
	"holiday" => $data['holiday']
];

echo json_encode($data);