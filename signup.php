<?php

require_once("action/SignupAction.php");
$action = new SignupAction();
$action->execute();
require_once("partial/header.php");
?>

<body>
    <form action="signup.php" method="post">
        <div class="form-group">
            <label for="new_username">Username :</label>
            <input type="text" class="form-control" id="new_username" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="new_password">Password :</label>
            <input type="password" class="form-control" id="new_password" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>