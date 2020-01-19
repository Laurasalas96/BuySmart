<?php
	require_once("action/DAO/Connection.php");

	class UserDAO {

		public static function authenticate($username, $password) {
			$user = null;

			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM users WHERE username = ?");
			$statement->bindParam(1, $username);
			$statement->setFetchMode(PDO::FETCH_ASSOC); // row["USERNAME"]
			$statement->execute();

			if ($row = $statement->fetch()) {
				if (password_verify($password, $row["password"])) {
					$user = [];
					$user["USERNAME"] = $row["username"];
					$user["VISIBILITY"] = $row["visibility"];
				}
			}

			return $user;
		}

		public static function authenticateAdmin($username, $password) {
			$admin = null;

			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM administration WHERE username = ?");
			$statement->bindParam(1, $username);
			$statement->setFetchMode(PDO::FETCH_ASSOC); // row["USERNAME"]
			$statement->execute();

			if ($row = $statement->fetch()) {
				if (password_verify($password, $row["password"])) {
					$admin = [];
					$admin["USERNAME"] = $row["username"];
					$admin["VISIBILITY"] = $row["visibility"];
				}
			}

			return $admin;
		}
		
		public static function createUser($username, $password, $privilege) {

			$connection = Connection::getConnection();

			$secure_password = password_hash($password, PASSWORD_BCRYPT);

			$statement = $connection->prepare("INSERT INTO users (username, password, visibility) VALUES (?,?,?)");
			$statement->bindParam(1, $username);
			$statement->bindParam(2, $secure_password);
			$statement->bindParam(3, $privilege);
			$statement->setFetchMode(PDO::FETCH_ASSOC); 
			$statement->execute();

			$connection = null;


		}

		public static function updatePassword($username, $newPassword) {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("UPDATE administration SET password = ? WHERE username = ?");
			$statement->bindParam(1, $newPassword);
			$statement->bindParam(2, $username);
			$statement->execute();
        }
	}