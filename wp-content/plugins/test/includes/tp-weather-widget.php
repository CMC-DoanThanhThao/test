<?php
class TP_WEATHER_WIDGET extends WP_Widget {
    CONST LIST_CITY = [
        'Ha+Noi' => 'Hà Nội',
        'Da+Nang' => 'Đà Nẵng',
        'Ho+Chi+Minh' => 'Hồ Chí Minh'
    ];

    CONST DEFAULT_CITY = 'Da+Nang';
    public function __construct()
    {
        parent::__construct(
            'tp_weather',
            __( 'CMC Weather Widget', 'text_domain' ),
            array( 'description' => esc_html__( 'A Widget go get weather data', 'text_domain' ), )
        );
        add_action('wp_ajax_search_city', [$this, 'change_city']);
    }

    public function form($instance)
    {
        $cities = self::LIST_CITY;
        $current_city = (isset($instance['city']) && !empty($instance['city'])) ? apply_filters('widget_title', $instance['city']) : '';
        require(TP_WEATHER_DIR . 'views/tp-weather-widget-form.php');
    }

    public function update($new_instance, $old_instance): array
    {
        $instance = [];
        $instance['city'] = (isset($new_instance['city']) && !empty($new_instance['city'])) ? apply_filters('widget_title', $new_instance['city']) : '';
        return $instance;
    }

    public function widget($args, $instance ) {
        $weather_setting = get_option('tp_weather_setting');
        $default_text = ($weather_setting && isset($weather_setting['default_text'])) ? $weather_setting['default_text'] : '';
        $cities = self::LIST_CITY;
        $current_city = (isset($instance['city']) && !empty($instance['city'])) ? apply_filters('widget_title', $instance['city']) : self::DEFAULT_CITY;
        $weatherInfo = TP_WEATHER::getAPI(['city'=> $current_city]);
        require(TP_WEATHER_DIR . 'views/tp-weather-widget-view.php');
    }

    public static function change_city() {
        $weather_setting = get_option('tp_weather_setting');
        $default_text = ($weather_setting && isset($weather_setting['default_text'])) ? $weather_setting['default_text'] : '';
        $cities = self::LIST_CITY;
        $current_city = $_POST['city'];
        $weatherInfo = TP_WEATHER::getAPI(['city'=> $_POST['city']]);
        require(TP_WEATHER_DIR . 'views/tp-weather-widget-view.php');
        exit;
    }
}