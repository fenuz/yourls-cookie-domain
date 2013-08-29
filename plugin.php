<?php
/*
Plugin Name: Cookie Domain 
Plugin URI: http://www.kennisnet.nl
Description: Customize Cookie Domain
Version: 0.1
Author: Frank Matheron <frankmatheron@gmail.com>
Author URI: https://github.com/fenuz
*/

if (!defined('COOKIE_DOMAIN')) {
    define('COOKIE_DOMAIN', parse_url($_SERVER['HTTP_HOST'], 1));
}

yourls_add_filter('setcookie_domain', 'cookie_domain_setcookie_domain_filter');
function cookie_domain_setcookie_domain_filter($domain) {
    return COOKIE_DOMAIN;
}