<?php

class TP_WEATHER {
    const API_KEY = 'b16479b68baa47147fcc96a54316f7a1';
    public function __construct()
    {

    }

    public static function getAPI($agrs = []){
        $url = 'https://api.openweathermap.org/data/2.5/weather?q=London&appid=b16479b68baa47147fcc96a54316f7a1';
    }
}
