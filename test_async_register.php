<?php

$url = 'http://localhost:8000/api/auth/register';
$data = [
    'email' => 'test_user_' . uniqid() . '@example.com',
    'password' => 'password123',
    'username' => 'async_test_user',
    'role' => 'ROLE_USER'
];

$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true 
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$responseHeaders = $http_response_header;

echo "Response Headers:\n";
print_r($responseHeaders);
echo "\nResponse Body:\n";
echo $result . "\n";
