<?php
include('cors.php');

$data = [
	"image" => "https://thispersondoesnotexist.com/image"
];

echo json_encode($data);