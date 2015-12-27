<?php

function whois($domain) {
	$server = 'whois.nic.ir';
	$domain = strtolower($domain);
	$data = '';
	$fp = @fsockopen($server, 43, $errno, $errstr, 5);
	if($fp) {
		@fputs($fp, $domain."\r\n");
		@socket_set_timeout($fp, 30);
		while(!@feof($fp)) {
			$data .= @fread($fp, 4096);
		}
		@fclose($fp);
		return $data;
	} else {
		return false;
	}
}

?>
