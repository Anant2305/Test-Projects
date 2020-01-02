<?php
function classAutoLoader($class){
	$class = strtolower($class);
	$the_path = "includes/{$class}.php";
	if(is_file($this_path) && !class_exists($class)){
		require_once $the_path;
	}
}

spl_autoload_register("classAutoLoader");

function redirect($location) {
	header("Location: {$location}");
}
?>