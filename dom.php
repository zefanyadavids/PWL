<?php  
	$dom = new DOMDocument();
	$dom->loadHTML($output);
	$xpath = new DOMXPath($dom);
?>