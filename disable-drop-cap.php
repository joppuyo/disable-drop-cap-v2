<?php

if (!defined('ABSPATH')) {
    die();
}

/*
 * Plugin name: Disable Drop Cap
 * Description: Plugin to disable drop cap in Gutenberg editor paragraph block
 * Plugin URI: https://github.com/joppuyo/disable-drop-cap-v2
 * Version: 2.1.8
 * Requires at least: 5.5
 * Requires PHP: 7.0
 * Author: Johannes Siipola
 * Author URI: https://siipo.la
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disable-drop-cap
 */

require __DIR__ . '/vendor/autoload.php';

Joppuyo\DisableDropCap\DisableDropCap::get_instance();
