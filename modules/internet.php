<?php
$fp = fsockopen("www.google.com", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "Disconnected";
} else {
    echo "Connected";
}
?>