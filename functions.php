<?php
/**
 * Libraries includes
 * The $includes array determines the code library included in the theme.
 * */

$includes = array(
  'lib/cleanup.php',
  'lib/config.php'
);

foreach ($includes as $inc) require_once locate_template($inc);
unset($inc);
