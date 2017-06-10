<?php

if($_SERVER['REQUEST_URI'] == '/rdns') {
  $hostName = gethostbyaddr(isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']);
  header('Content-Type: text/plain; charset=UTF-8');
  print $hostName;
} else {
  $browser = get_browser(null, true);
  $browser['useragent'] = $_SERVER['HTTP_USER_AGENT'];
  header('Content-Type: application/json; charset=UTF-8');
  print_r(json_encode($browser));
}
