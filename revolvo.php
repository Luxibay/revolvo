<?php

/**
 * Plugin Name: Revolvo
 * Plugin URI: https://luxibay.com/plugins/revolvo
 * Description: Adds a Gravity Forms element to Breakdance
 * Author: Luxibay
 * Author URI: https://luxibay.com/
 * License: GPLv2
 * Text Domain: revolvo
 * Domain Path: /languages/
 * Requires Plugins: gravityforms, breakdance
 * Version: 0.5
 */

define('REVOLVO_PATH', plugin_dir_path(__FILE__) . 'frame');
define('REVOLVO_MAIN', __FILE__);
define('REVOLVO_VERSION', '1.0');
define('REVOLVO_NAME', 'Revolvo');

function revolvo_launch()
{

    require_once(__DIR__ . '/vendor/autoload.php');
    require_once(REVOLVO_PATH . '/revolvo-connect.php');

    $revolvo = new Revolvo_Connect();
}

revolvo_launch();
