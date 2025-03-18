<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function generateResponse(Request $request)
    {
        // Validate request
        $request->validate([
            'text' => 'required|string',
        ]);

        $apiKey = env('AI_API_KEY');
        $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey";

        $data = [
            "contents" => [
                [
                    "parts" => [
                        ["text" => $request->text]
                    ]
                ]
            ]
        ];

        // Send request to AI API
        $response = Http::post($apiUrl, $data);

        // Return AI response as JSON
        return response()->json($response->json(), $response->status());
    }
}
