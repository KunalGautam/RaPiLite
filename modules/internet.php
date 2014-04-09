<?php
function get_contents() {
  file_get_contents("http://example.com");
  return $http_response_header;
}
$k = get_contents();

if ($k['0'] == "HTTP/1.0 200 OK" || $k['0'] == "HTTP/1.1 200 OK"){
	echo "connected";
}
else {
	echo "Disconnected";
}
?>
