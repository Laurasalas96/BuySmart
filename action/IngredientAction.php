<?php

	require_once("action/DAO/ProductDAO.php");
    require_once("action/CommonAction.php");
    
    Class IngredientAction extends CommonAction {
        
        public $json;

        public function __construct()
        {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction()
        {
            if(!empty($_POST["type"])) {
                if($_POST["type"] === "search") {
                    $this->json = ProductDAO::search($_POST["data"]);
                }
            }
            
        }
    }