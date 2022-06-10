<div class="tp-weather-view">
    <p><?= $default_text ?></p>
    <select class="tp-weather-selector">
        <?php foreach ($cities as $key=>$city):?>
            <option value="<?= $key ?>" <?= ($current_city == $key) ? 'selected' : ''?> ><?= $city ?></option>
        <?php endforeach; ?>
    </select>

    <div class="tp-weather-content">
        <?php
        if($weatherInfo):
            ?>
            <div class="tp-weather-status">
                <img class="tp-weather-icon" src="<?= TP_WEATHER::getWeatherIcon($weatherInfo['weather'][0]['icon'])?>" alt="Weather Icon">
                <span class="tp-weather-text"><?= $weatherInfo['weather'][0]['main'] ?> (<?= $weatherInfo['weather'][0]['description'] ?>)</span>
            </div>

            <table class="tp-weather-result table <?php echo ($key == 0) ? 'tp-active' : ''; ?>" id="tp-weather-<?php echo $weatherInfo['id']; ?>">
                <tbody>
                <tr>
                    <td>Sunrise</td>
                    <td><?php echo date('H:i', $weatherInfo['sys']['sunrise'] + $weatherInfo['timezone']); ?></td>
                </tr>
                <tr>
                    <td>Sunset</td>
                    <td><?php echo date('H:i', $weatherInfo['sys']['sunset'] + $weatherInfo['timezone']); ?></td>
                </tr>
                <tr>
                    <td>Pressure</td>
                    <td><?php echo $weatherInfo['main']['pressure']; ?> hpa</td>
                </tr>
                <tr>
                    <td>Humidity</td>
                    <td><?php echo $weatherInfo['main']['humidity']; ?> %</td>
                </tr>
                <tr>
                    <td>Wind</td>
                    <td><?php echo $weatherInfo['wind']['speed']; ?> km/h</td>
                </tr>
                <tr>
                    <td>Cloud</td>
                    <td><?php echo $weatherInfo['clouds']['all']; ?>%</td>
                </tr>
                </tbody>
            </table>
        <?php
        else:
            echo '<table>';
            echo '<tr><td>No Result.</td></tr>';
            echo '</table>';
        endif;
        ?>
    </div>
</div>