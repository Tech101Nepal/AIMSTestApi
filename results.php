<?php
include('cors.php');

$data = [
	[
		"year" => "Class II",
		"terms" => [
			[
				"term" => "Third Term",
				"grade" => "A",
				"total_marks" => "92%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "91",
					"maths" => "98",
					"science" => "72"
				]
			],
			[
				"term" => "Second Term",
				"grade" => "A+",
				"total_marks" => "95%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "95",
					"maths" => "98",
					"science" => "85"
				]
			],
			[
				"term" => "First Term",
				"grade" => "A",
				"total_marks" => "85%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "86",
					"maths" => "92",
					"science" => "68"
				]
			]
		]
	],
	[
		"year" => "Class I",
		"terms" => [
			[
				"term" => "Third Term",
				"grade" => "A",
				"total_marks" => "92%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "91",
					"maths" => "98",
					"science" => "72"
				]
			],
			[
				"term" => "Second Term",
				"grade" => "A+",
				"total_marks" => "95%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "95",
					"maths" => "98",
					"science" => "85"
				]
			],
			[
				"term" => "First Term",
				"grade" => "A",
				"total_marks" => "85%",
				"download" => "https://tech101.com.np/marksheet.pdf",
				"marks" => [
					"english" => "86",
					"maths" => "92",
					"science" => "68"
				]
			]
		]
	]
];

echo json_encode($data);