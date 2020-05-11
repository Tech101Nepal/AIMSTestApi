<?php
include('cors.php');

$data = [
	[
		"id" => 1,
		"time" => "January 22, 2020",
		"title" => "Pending Fee",
		"description" => "Dear Student/Parent, you have a fee pending.",
		"cta" => "#fee",
		"cta_internal" => true,
		"cta_text" => "View Fee"
	],
	[
		"id" => 2,
		"time" => "3 days ago",
		"title" => "New Notice",
		"description" => "New Routine has been publushed.",
		"cta" => "#notice",
		"cta_internal" => true,
		"cta_text" => "View Notice"
	],
	[
		"id" => 3,
		"time" => "5 hours ago",
		"title" => "Holiday Notice",
		"description" => "The school will remain closed tomorrow on the occasion of Holi."
	],
	[
		"id" => 4,
		"time" => "2 hours ago",
		"title" => "Bus is on the way",
		"description" => "The school bus is on the way.",
		"cta" => "#bus",
		"cta_internal" => true,
		"cta_text" => "Track Location"
	],
	[
		"id" => 5,
		"time" => "1 hours ago",
		"image" => "https://thispersondoesnotexist.com/image",
		"title" => "Message from Principle",
		"description" => "Tour album has been published",
		"cta" => "https://facebook.com/Tech101Nepal",
		"cta_text" => "View Album"
	]
];

echo json_encode($data);