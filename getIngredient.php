<?php

require_once("action/IngredientAction.php");
$action = new IngredientAction();
$action->execute();
echo json_encode($action->json);