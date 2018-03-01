<?php
	$v = "hello   world";
	$e = preg_replace('/\s+/', ' ',str_replace(","," ",trim($v)));
	echo $e;