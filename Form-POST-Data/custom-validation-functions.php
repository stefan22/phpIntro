<?php

		//*presence
		// use trim() so empty spaces don't count
		// use === to avoid false positives
		// empty() would consider "0" to be empty

		function has_presence($value) {
			return isset($value) && $value !== "";		//this will return a boolean either true or false
														//if it's set and the value is not equal to an empty string
		}												//otherwise return false

		
		// string length
		//max length
		function has_max_length($value) {
			return strlen($value) <= $max;
		}


		//* inclusion in a set
		function has_inclusion_in($value,$set) {
			return in_array($value, $set);
		}


		function form_errors($errors=array()) {
			$output = "";
				if (!empty($errors)) {
					$output .= "<div class=\"error\">";
					$output .= "Please fix the following errors";
					$output .= "<ul>";
					foreach ($errors as $key => $error) {
						$output .= "<li>{$error}</li>";
					}
					$output .= "</ul>";
					$output .= "</div>";
				}

				return $output;
		}


		function redirect_to($page) {
			return header("Location: {$page}");
		}
		
	

?>


		