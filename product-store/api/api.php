<?php

    function apiCall(){
    $curl = curl_init();

    curl_setopt_array($curl,[
        CURLOPT_URL => "https://dummyjson.com/products",
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $data = curl_exec($curl);

    $betterData = json_decode($data, true);

    return $betterData;
    
}
?>