<label for="<?= $this->get_field_id('city'); ?>"><?php _e('City', 'tp_weather') ?></label>
<select id="<?= $this->get_field_id('city'); ?>" name="<?= $this->get_field_name('city'); ?>">
    <?php foreach ($cities as $key=>$city):?>
        <option value="<?= $key ?>" <?= ($current_city == $key) ? 'selected' : ''?> ><?= $city ?></option>
    <?php endforeach; ?>
</select>