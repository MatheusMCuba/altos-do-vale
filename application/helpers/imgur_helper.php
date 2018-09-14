<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('imgur_upload')) {
    function imgur_upload($image)
    {
        $client_id = '861ad5aa539e67c';
        $file = file_get_contents($image);
        $url = 'https://api.imgur.com/3/image.json';
        $headers = array("Authorization: Client-ID $client_id");
        $pvars = array('image' => base64_encode($file));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $pvars
        ));
        $json_returned = curl_exec($curl); // blank response
        curl_close($curl);

        return json_decode($json_returned, true);
    }
}