<div class="wrap tp-app">
    <h2>Settings</h2>
    <form name="post" action="options.php" method="post" id="post" autocomplete="off">
        <input type="hidden" name="option_page" value="<?php echo $option_group; ?>">
        <input type="hidden" name="action" value="update">
        <?php wp_nonce_field($option_group . '-options'); ?>
        <div class="tp-city-list"></div>

        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="city">City</label></th>
                    <td>
                        <input type="text" id="city" name="tp_weather_setting[default_text]" placeholder="Enter Your City" class="regular-text" value="<?= isset($default_text) ? $default_text : '' ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="alignleft">
            <button class="button button-primary button-large" id="btnSave" type="submit">Save Changes</button>
        </div>
    </form>
</div>
