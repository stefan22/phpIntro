<?php


function say_hello($name) {
	return "Hello {$name}";
}

function redirect_to($location) {
	header("Location: ". $location);
	exit;
}


























?>