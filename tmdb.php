<?php
function searchMovie($query) {
    // This is a v3 API Key, so we put it in the URL, not the header
    $apiKey = "f50cf8c6b89c7c551fae4588e4a4e146";
    $url = "https://api.themoviedb.org/3/search/movie?api_key=" . $apiKey . "&query=" . urlencode($query);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false 
    ]);

    $response = curl_exec($ch);
    
    // Check for cURL errors
    if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);

    $data = json_decode($response, true);
    return $data['results'] ?? [];
}
?>