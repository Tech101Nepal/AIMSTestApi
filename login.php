<?php
include('cors.php');

$email = $_POST['email'];
$password = $_POST['password'];

$data = [
	"success" => false,
	"message" => "Invalid login details"
];

if ( $email == "single@aims.tech101.com.np" && $password == "password" ) {
	$data = [
		"success" => true,
		"users" => [
			"45" => [
				"name" => "Bikram Lama",
				"short_name" => "Bikram L.",
				"rollno" => "000014",
				"image" => "https://tech101.com.np/wp-content/uploads/2018/02/Bikram-Lama-150x150.png",
				"class" => "II 'A'",
				"email" => "bikram.l@tech101.com.np",
				"phone" => "9808134818",
				"address" => "Jorpati, Kathmandu"
			]
		]
	];
}

if ( $email == "multiple@aims.tech101.com.np" && $password == "password" ) {
	$data = [
		"success" => true,
		"users" => [
			"45" => [
				"name" => "Bikram Lama",
				"short_name" => "Bikram L.",
				"rollno" => "000014",
				"image" => "https://tech101.com.np/wp-content/uploads/2018/02/Bikram-Lama-150x150.png",
				"class" => "II 'A'",
				"email" => "bikram.l@tech101.com.np",
				"phone" => "9808134818",
				"address" => "Jorpati, Kathmandu"
			],
			"46" => [
				"name" => "Ashutosh Gartaula",
				"short_name" => "Ashutosh G.",
				"rollno" => "000015",
				"image" => "https://tech101.com.np/wp-content/uploads/2018/02/Ashutosh-Garataula-150x150.png",
				"class" => "II 'A'",
				"email" => "ashutosh.g@tech101.com.np",
				"phone" => "9808026184",
				"address" => "Sano Gaucharan, Kathmandu"
			]
		]
	];
}

echo json_encode($data);