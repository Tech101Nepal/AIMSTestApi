<?php
include('cors.php');

$data = [
	[
		"title" => "Fee for Baishakh",
		"total" => "Rs. 15,000",
		"services" => [
			[
				"title" => "Tuition Fee",
				"amount" => "Rs. 2,000"
			],
			[
				"title" => "Monthly Fee",
				"amount" => "Rs. 10,000"
			],
			[
				"title" => "Misc.",
				"amount" => "Rs. 3,000"
			]
		]
	],
	[
		"title" => "Fee for Chaitra",
		"total" => "Rs. 12,000",
		"services" => [
			[
				"title" => "Tuition Fee",
				"amount" => "Rs. 2,000"
			],
			[
				"title" => "Monthly Fee",
				"amount" => "Rs. 10,000"
			]
		]
	]
];

echo json_encode($data);