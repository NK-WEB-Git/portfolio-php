<?php

namespace Debug;

Class Debug  {

	public function getDataServer() {

		return var_dump($_SERVER)
	}

	public function getDataConst() {

		return $const;
	}

	public function getDataSession() {

		return var_dump($_SESSION);
	}
	
}

?>