<?php
	require_once("action/DAO/Connection.php");

	class ProductDAO {

		public static function search($data) {
			$product = array();

			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM products WHERE name = ?");
			$statement->bindParam(1, $data);
			$statement->setFetchMode(PDO::FETCH_ASSOC); // row["USERNAME"]
			$statement->execute();

			while ($row = $statement->fetch()) {
                $product[] = $row;
            }

			return $product;
        }
    }