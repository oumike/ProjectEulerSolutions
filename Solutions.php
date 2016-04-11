<?php

foreach (glob("Library/*.php") as $filename) {
	require_once($filename);
}

$a = new Problem1Solution();

$params = array('limit' => 10000000000000, 'multiples' => array(3,5));
print $a->getSolution(json_encode($params)). "\n";

