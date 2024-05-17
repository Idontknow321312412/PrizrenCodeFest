<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        try {
            // Validate the form data
            $request->validate([
                'location' => 'required|string',
                'phone_number' => 'required|string',
                'cart_data' => 'required|array',
            ]);

            // Extract data from the request
            $location = $request->input('location');
            $phone_number = $request->input('phone_number');
            $cart_data = $request->input('cart_data');

            // Format the email content
            $emailContent = "Order Details:\n\n";
            $emailContent .= "Location: $location\n";
            $emailContent .= "Phone Number: $phone_number\n";

            foreach ($cart_data as $item) {
                $emailContent .= "Item: {$item['name']}, Price: {$item['price']}\n";
            }

            // Send the email
            $to = 'enesramani2323@gmail.com';
            $subject = 'New Order from ' . $location;

            Mail::raw($emailContent, function ($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            });

            // Send a response back to the client
            return response()->json(['message' => 'Order submitted successfully']);

            } 
            catch (Exception $e) {
                // Log the exception
                Log::error('Error submitting order: ' . $e->getMessage());
            
                // Return an error response with the exception message
                return response()->json(['error' => $e->getMessage()], 500);
            }            
    }
}
