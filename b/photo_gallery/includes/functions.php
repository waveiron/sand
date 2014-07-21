<?php 
function refirect_to($location = NULL) {
	if ($location != null) {
		header("Location: {$location}");
		exit;
	}
}

function output_message($message='') {
	if (!empty($message)) {
		return "<p class = 'message'>{$message}</p>";
	} else {
		return '';
	}
}