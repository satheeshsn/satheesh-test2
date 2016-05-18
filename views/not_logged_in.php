<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>User Login</h2>
            <?php
            if (isset($login)) {
                if ($login->errors) {
                    foreach ($login->errors as $error) {
                        echo $error;
                    }
                }
                if ($login->messages) {
                    foreach ($login->messages as $message) {
                        echo $message;
                    }
                }
            }
            ?>
            <form method="post" action="index.php" name="loginform" role="form">
                <div class="form-group">
                    <label for="login_input_username">Username</label>
                    <input id="login_input_username" class="login_input form-control" type="text" name="user_name" required />
                </div>

                <div class="form-group">
                    <label for="login_input_password">Password</label>
                    <input id="login_input_password" class="login_input form-control" type="password" name="user_password" autocomplete="off" required />
                </div>

                <input type="submit" class="btn btn-default"  name="login" value="Log in" />

            </form>

            <a href="register.php">Create Account</a>
        </div>
    </body>
</html>