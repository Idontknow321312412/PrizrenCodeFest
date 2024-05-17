<?php

// Retrieve the raw POST data
$jsonData = file_get_contents('php://input');

// Decode the JSON data
$orderData = json_decode($jsonData, true);

// Check if the data is valid
if (!$orderData || !isset($orderData['items']) || !isset($orderData['total'])) {
    http_response_code(400);
    exit('Invalid data');
}

// Extract items and total from the data
$items = $orderData['items'];
$total = $orderData['total'];

// Format the email content
$emailContent = "Order Details:\n\n";
foreach ($items as $item) {
    $emailContent .= "Item: {$item['name']}, Price: {$item['price']}\n";
}
$emailContent .= "\nTotal Price (including shipping): $total";

// Send the email
$to = 'enesramani2323@gmail.com';  // Replace with your email address
$subject = 'New Order';
$headers = 'From: enesramani2323@gmail.com';  // Replace with your email or leave it empty

mail($to, $subject, $emailContent, $headers);

// Send a response back to the client
$response = ['message' => 'Order submitted successfully'];
header('Content-Type: application/json');
echo json_encode($response);

?>
