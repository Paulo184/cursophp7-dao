<?php

	spl_autoload_register(function($class_name){
		$filename = 'class'.DIRECTORY_SEPARATOR.".php";

		if (file_exists(($filename))) {
			require_once($filename);
		}
	});

?>