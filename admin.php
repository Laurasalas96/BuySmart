<?php
require_once("action/AdminLoginAction.php");
$action = new AdminLoginAction();
$action->execute();
require_once("partial/header.php");
?>

<body>
    <form class="form-signin" action="admin.php" method="POST">
        <div id="login">
            <?php
            if ($action->wrongLogin) {
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur de connexion</strong>
                </div>
            <?php
            }
            ?>


            <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required="true" autofocus="true" value="<?php echo isset($_COOKIE["remember-me"]) ? $_COOKIE["remember-me"] : "" ?>">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="true">
            <div class="checkbox mb-3">
                <label id="remember-me">
                    <input type="checkbox" value="remember-me" name="remember-me">Se souvenir</input>
                </label>
            </div>
            <button class="btn btn-lg btn-primary" type="submit">Connexion</button>
            <p class="mt-5 mb-3 text-muted">@PolyHx 2020</p>

        </div>
    </form>
</body>