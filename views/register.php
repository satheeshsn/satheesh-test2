<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Create Account</h2>
            <!-- register form -->
            <form method="post" action="register.php" name="registerform" role="form">
                <div class="form-group">
                <label for="login_input_username">Username</label>
                <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                </div>

                <div class="form-group">
                <label for="login_input_email">User's email</label>
                <input id="login_input_email" class="login_input form-control" type="email" name="user_email" required />
                </div>

                <div class="form-group">
                <label for="login_input_password_new">Password (min. 6 characters)</label>
                <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                </div>
                
                <div class="form-group">
                <label for="login_input_password_repeat">Repeat password</label>
                <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                </div>
                <input type="submit"  name="register" value="Register" class="btn btn-default" />

            </form>

            <a href="index.php">Back to Login Page</a>
        </div>
    </body>
</html>
