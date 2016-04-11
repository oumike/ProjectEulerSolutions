<?php

foreach (glob("Library/*.php") as $filename) {
	require_once($filename);
}

$a = new Problem1Solution();

$a->getSolution();