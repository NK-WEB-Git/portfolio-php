<?php

namespace Debug;

Class Debug  {

	static public function getDataServer() {

		return var_dump($_SERVER);
	}

	static public function getDataConst() {

		return var_dump(get_defined_constants());
	}

	static public function getDataSession() {

		return var_dump($_SESSION);
	}
	
}

?>