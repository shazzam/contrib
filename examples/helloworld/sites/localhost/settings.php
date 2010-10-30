<?php

// The URL of this installation.
$base_url  = 'http://localhost';

// The human name.
$site_name = 'Hello World';

// If $devel is TRUE, the application show debugging. If you change this
// value, remember to set it back to FALSE when going in production.
$devel = TRUE;

// Transform URLs in controllers.
$dispatcher_conf = array(
  '@^$@' => 'hello.php',
);

// // Where to put logs.
// $path_log  = '/var/log/lemur';

// Paths for app, classes and templates.
$path_app   = '';
$path_class = '';
$path_theme = '';

// // Variables for theming, common to all files.
// $vars = array(
//
// );

// // Localization
// $valid_langs = array(
//
// );

require 'settings_extra.php';
