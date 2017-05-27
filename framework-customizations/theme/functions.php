<?php 

add_action('fw_init', '_action_theme_test_fw_settings_form');
function _action_theme_test_fw_settings_form() {
    if (class_exists('FW_Settings_Form')) {
        require_once dirname(__FILE__) . '/class-fw-settings-form-test.php';
        new FW_Settings_Form_Test('test');
    }
}