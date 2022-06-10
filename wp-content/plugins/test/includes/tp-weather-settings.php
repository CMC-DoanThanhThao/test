<?php
class TP_WEATHER_SETTING {
    protected $option;
    const OPTION_GROUP = 'tp_weather_group';

    public function __construct()
    {
        $this->option = get_option('tp_weather_setting');
        add_action('admin_init', [$this, 'register_setting']);
        add_action('admin_menu', function(){
            add_submenu_page('options-general.php', 'TP WEATHER SETTINGS','TP Weather', 'manage_options', 'tp_weather', [$this, 'create_page']);
        });
    }

    public static function create_page(){
        $weather_setting = get_option('tp_weather_setting');
        $default_text = ($weather_setting && isset($weather_setting['default_text'])) ? $weather_setting['default_text'] : '';
        $option_group = self::OPTION_GROUP;
        require(TP_WEATHER_DIR . 'views/tp-weather-settings-view.php');
    }

    public function register_setting(){
        register_setting(
            self::OPTION_GROUP,
            'tp_weather_setting',
            [$this, 'save_setting']
        );
    }

    public function save_setting($input){
        $new_input = [];
        $new_input['default_text'] = trim($input['default_text']);
        return $new_input;
    }

    public function search_city() {
        if (isset($_POST['city']) && !empty($_POST['city'])) {
            $data = TP_WEATHER::getAPI(['city' => $_POST['city']]);
            wp_send_json_success($data);
        }
    }
}
?>