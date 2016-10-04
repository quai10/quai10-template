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
$includes = [
  'lib/cleanup.php',
  'lib/config.php',
  'lib/contact.php',
  'vendor/autoload.php',
];

foreach ($includes as $inc) {
    include_once locate_template($inc);
}

add_action('wp_enqueue_scripts', array('Quai10\ScriptLoader', 'init'));
