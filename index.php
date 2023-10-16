<?php
if (!empty($_GET['r'])) {
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ./releases/' . rawurlencode($_GET['r']) . '/');
} else {
	readfile('index.html');
}
?>