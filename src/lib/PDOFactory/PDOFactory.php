<?php

namespace PDOFactory;

Class PDOFactory {

	public function getMysqlConnexion($host, $database, $user, $password) {

		try {

			$db = new \PDO('mysql:host=' .$host. ';dbname=' .$database, $user, $password);
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FECTH_OBJ);
			return $db;
		}
		catch(\PDOException $e) {

			echo '<div>'
			echo "Impossible de se connecter à la base de donnée";
			echo 'erreur : ' .$e->getMessage();
			echo '</div>';
		}
	}

	public function getPgsqlConnexion($host, $database, $user, $password) {

		try {

			$db = new \PDO('pgsql:host=' .$host. ';dbname=' .$database, $user, $password);
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FECTH_OBJ);
			return $db;
		}
		catch(\PDOException $e) {

			echo '<div>'
			echo "Impossible de se connecter à la base de donnée";
			echo 'erreur : ' .$e->getMessage();
			echo '</div>';
		}
	}
}

?>