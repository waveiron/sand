<?php 
function redirect_to($locaton = null) {
	if ($location != null) {
		header('location: $location');
		exit;
	}
}

function output_message=="" {
	if (!empty($message)) {
		return "<p class = 'message'>{$message}</p>";
	} else { return '';}
}