<?php

	$autoload = function($class){
		$path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
		include($path.'.php');
	};

	spl_autoload_register($autoload);

	$var = new Config();
?>