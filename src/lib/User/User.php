<?php

namespace User;

Class User {

	private $_id;
	private $_username;
	private $_password;

	public function __construct(array $data) {

		$this->hydrate($data);
	}

	public function hydrate(array $data) {

	}

	public function getId() {

		return $this->_id;
	}

	public function getUsername() {

		return $this->_username;
	}

	public function getPassword() {

		return $this->_password;
	}

	public function setId($id) {

		$id = (int) $id;

		if( $id > 0) {

			$this->_id = 0;
		}

	}

	public function setUsername($username) {

		if(is_string($username)) {

			$this->_username = $username;
		}
	}

	public function setPassword() {

	}

}

?>