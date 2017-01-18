<?php
/**
 * Libraries includes
 * The $includes array determines the code library included in the theme.
 *
 * PHP version 5
 *
 * @category Template
 *
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://quai10.org/
 */
use Quai10\Config;
use Quai10\ContactForm;
use Quai10\ScriptLoader;

require_once __DIR__.'/vendor/autoload.php';

add_action('wp_enqueue_scripts', [ScriptLoader::class, 'init']);
add_action('wp_enqueue_scripts', [Config::class, 'cleanup']);
add_action('after_setup_theme', [Config::class, 'setupTheme']);
add_filter('body_class', [Config::class, 'addBodyClass']);
add_action('wpcf7_init', [ContactForm::class, 'addFields']);
add_action('wpcf7_init', [ContactForm::class, 'addSubmitBtn']);
