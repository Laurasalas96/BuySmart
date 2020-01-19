<?php

	require_once("action/DAO/UserDAO.php");
    require_once("action/CommonAction.php");
    
    Class SignupAction extends CommonAction {
        
        public function __construct()
        {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction()
        {
            if(isset($_POST["username"]) && isset($_POST["password"])) {
                UserDAO::createUser($_POST["username"], $_POST["password"], 1);
                header("location:index.php");
                exit;
            }
            
        }
    }