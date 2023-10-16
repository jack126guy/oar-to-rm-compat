<?php
if (!empty($_GET['r'])) {
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ../releases/' . rawurlencode($_GET['r']) . '/#ref-list-wips');
} else {
	header('HTTP/1.1 302 Found');
	header('Location: ./wipa/');
}
?>