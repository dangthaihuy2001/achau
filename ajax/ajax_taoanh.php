<?php
include "ajax_config.php";
$apiKey = "AIzaSyAb4NXj0qXymnS0gJxPrXDBzqX3XEr-z0I"; // Thay bằng API key từ Google AI Studio

$prompt =  (isset($_POST['key']) && $_POST['key'] !='') ? ($_POST['key']) : '';


$data = [
    "contents" => [[
        "parts" => [
            ["text" => $prompt]
        ]
    ]],
    "generation_config" => [
        "response_modalities" => ["TEXT", "IMAGE"]
    ]
];

$ch = curl_init("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-preview-image-generation:generateContent?key=$apiKey");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if (!empty($result['candidates'][0]['content']['parts'])) {

        if (!empty($result['candidates'][0]['content']['parts'][1]['inlineData']['data'])) {

            $imageData = base64_decode($result['candidates'][0]['content']['parts'][1]['inlineData']['data']);
            $tenfile = $func->stringRandom(10);
            file_put_contents("../images/".$tenfile.".png", $imageData);
            echo $tenfile.".png";
         
        }
    
} else {
    echo "❌ Full response:\n";
    print_r($result);
}
