<?php

	require_once("action/DAO/UserDAO.php");
	require_once("action/CommonAction.php");

	class AdminLoginAction extends CommonAction {
		public $wrongLogin = false;

		public function __construct()
		{
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction()
		{
			if(isset($_POST["username"]) && isset($_POST["password"])) {
				$user = UserDAO::authenticateAdmin($_POST["username"], $_POST["password"]);

				if(!isset($_COOKIE["remember-me"]) && isset($_POST["remember-me"])) {
					setcookie("remember-me", $_POST["username"]);
				}

				if(!empty($user)) {
					$_SESSION["username"] = $user["USERNAME"];
					$_SESSION["visibility"] = $user["VISIBILITY"];
					header("location:index.php");		
					exit;
				}

				else {
					$this->wrongLogin = true;
				}

            }
		}
	}