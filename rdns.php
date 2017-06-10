<?php

if(isset($_GET['ip'])) {
  $ip = isValidIp($_GET['ip']);
  if(!$ip) {
    header('Content-Type: text/plain; charset=UTF-8');
    print 'Not a valid IP Address';    
  }else{
    $hostName = gethostbyaddr($ip);
    header('Content-Type: text/plain; charset=UTF-8');
    print $hostName;
  }
}else{
  $hostName = gethostbyaddr(isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']);
  header('Content-Type: text/plain; charset=UTF-8');
  print $hostName;
}

function isValidIp($ip) {
  if(substr_count($ip, '.') != 3) return false;
  return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
}
?>
