<?php
include('cors.php');

$data = [
	[
		"id" => 1,
		"title" => "Routine published for 3rd Terminal Examinations",
		"time" => "April 10, 2020",
		"read"  => true,
		"description" => "Dear students/parents, the routine for 3rd terminal examinations has been published."
	],
	[
		"id" => 2,
		"title" => "Upcoming Tour",
		"time" => "April 11, 2020",
		"description" => "Dear students/parents, we have planned a tour to pokhara this coming month. Exact dates/time and locations has been sent to your phones."
	],
	[
		"id" => 3,
		"title" => "School Re-Opens",
		"time" => "May 13, 2020",
		"read"  => true,
		"description" => "Dear students/parents, The school re-opens from May 14th"
	],
	[
		"id" => 4,
		"title" => "Annual Sports-week",
		"time" => "May 18, 2020",
		"description" => "We are glad to announce the annual sports-week"
	]
];

echo json_encode($data);