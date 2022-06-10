<?php

class TP_WEATHER {
    const API_KEY = 'b16479b68baa47147fcc96a54316f7a1';
    public function __construct()
    {

    }

    public static function getAPI($args = []){
        extract(shortcode_atts([
            'city' => ''
        ], $args));
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=" . self::API_KEY;
        $data = wp_remote_get($url);
        if( is_wp_error( $data ) ) {
            return false;
        }
        $data = wp_remote_retrieve_body( $data );
        if($data){
            $data = json_decode($data, true);
        }
        return $data;
    }

    public static function getWeatherIcon($id){
        $url = "http://openweathermap.org/img/wn/$id@2x.png";
        return $url;
    }

    public static function get_temperature($temp = 0, $option = 'celsius') {
        switch ($option) {
            case 'celsius':
                return $temp . ' C';
            case 'fahrenheit':
                return ($temp * 9 / 5 + 32) . ' F';
        }
    }
}
