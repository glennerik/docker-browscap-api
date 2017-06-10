<?php
// TODO: Add suport for any IP Address, not just remote
$hostName = gethostbyaddr(isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']);
header('Content-Type: text/plain; charset=UTF-8');
print $hostName;
?>
