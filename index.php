<?php
$browser = get_browser(null, true);
$browser['useragent'] = $_SERVER['HTTP_USER_AGENT'];
header('Content-Type: application/json; charset=UTF-8');
print_r(json_encode($browser));
