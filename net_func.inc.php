<html>
<body>
<?php

function get_url($url) {
	$c = curl_init();  //initialize cUrl
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	$content = trim(curl_exec($c));
	curl_close($c);
	return $content;
}

?>
</body>
</html>