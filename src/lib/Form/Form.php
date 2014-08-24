<?php

namespace Form;

Class Form {
	
	public static function input($index) {

		$value = isset($_POST[$index]) ? $_POST[$index] : '' ;
		return "<input type='text' class='form-control' id='$index' name='$index' value='$value'/>";
	}
}

?>