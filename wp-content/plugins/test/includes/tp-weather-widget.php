<?php

class TP_WEATHER {
    const API_KEY = 'b16479b68baa47147fcc96a54316f7a1';
    public function __construct()
    {

    }

    public static function getAPI($args = []){
        extract(shortcode_atts([
            'cities' => []
        ], $args));
        $weatherData = [];
        foreach ($cities as $city){
            $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=" . self::API_KEY;
            @$data = file_get_contents($url);
            if($data){
                $weatherData[$city] = json_decode($data, true);
            }
        }
        return $weatherData;
    }

    public static function getWeatherIcon($id){
        $url = "http://openweathermap.org/img/wn/$id@2x.png";
        return $url;
    }
}
