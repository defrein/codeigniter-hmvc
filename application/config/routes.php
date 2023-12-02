<?php
defined('BASEPATH') or exit('No direct script access allowed');



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// modular based routes

$route["show-message"] = "message/show_message";
$route["simple-message"] = "message/simpleMessage";

$route["my-view"] = "template/my_view";
$route["home"] = "home/call_homepage";
$route["about"] = "about/call_aboutpage";
