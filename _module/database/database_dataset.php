<?php
require "../_include/inc_config.php";

// utilisation de la librairie
require_once '../vendor/autoload.php';
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create("fr_FR");

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";