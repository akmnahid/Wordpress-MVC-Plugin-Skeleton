<?php
/**
 * Plugin Name: Wordpress MVC Plugin Skeleton
 * Plugin URI: https://github.com/akmnahid/Wordpress-MVC-Plugin-Skeleton
 * Description: A Simple MVC Skeleton for Wordpress Plugin Development
 * Version: 1.0.1
 * Author: Nahid Hossain
 * Author URI: http://www.akmnahid.com
 * License: GPL2
 */


defined('ABSPATH') or die('No script kiddies please!');


//config file
$_wpsf_config = require realpath(__DIR__ . '/app/config/main.php');

//including our framework
require realpath(__DIR__ . '/framework/FrameworkBootstrap.php');