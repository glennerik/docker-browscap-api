<?php
$browser = get_browser(null, true);
$browser['useragent'] = $_SERVER['HTTP_USER_AGENT'];
print_r(json_encode($browser));
