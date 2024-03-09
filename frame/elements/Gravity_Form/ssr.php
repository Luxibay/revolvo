<?php
/**
 * @var array $propertiesData
 */

//$form_list = \RevolvoElements\Integrations\getGravityForms();

$form_id = intval($propertiesData['content']['form_settings']['form_selection']);
$display_title = $propertiesData['content']['form_settings']['display_title'];
$display_description = $propertiesData['content']['form_settings']['display_description'];
$display_if_inactive = $propertiesData['content']['form_settings']['display_if_inactive'];
$use_ajax = $propertiesData['content']['form_settings']['use_ajax'];
$tab_index = $propertiesData['content']['form_settings']['tab_index'];

/*if (did_action('wp_head') != 1) {
    if (class_exists('GFFormDisplay')) {
        GFFormDisplay::print_form_scripts($form_id ?? 0, true ?? false);
    }
} else {*/
gravity_form_enqueue_scripts($form_id, true ?? false);
//}
gravity_form($form_id, $display_title, $display_description, $display_inactive, '', $use_ajax, $tab_index);

//gravity_form($options['form_add_id'], $options['form_show_title'] ?? true, $options['form_show_description'] ?? true, $options['form_show_inactive'] ?? false, '', $options['form_ajax'] ?? false, $options['form_tabindex'] ?? 0);