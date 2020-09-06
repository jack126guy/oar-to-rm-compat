<?php
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
$baseLocation = ($isHttps ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']) . '/';
if (!empty($_GET['r'])) {
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $baseLocation . 'releases/' . rawurlencode($_GET['r']));
} else {
	header('HTTP/1.1 302 Found');
	header('Location: ' . $baseLocation);
}
?>