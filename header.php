<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/assets/dist/css/styles.min.css">
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/global.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
