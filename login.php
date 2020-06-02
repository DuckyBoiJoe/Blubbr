<html>

<head>
    <title>Login - Blubbr</title>
    <link rel="shortcut-icon" href="Blubbr.png">
    <link rel="stylesheet" href="style.css">
    <h1 style="font-size: xxx-large;">Blubbr</h1>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6" style="align-items: center;">
                    <h2 style="font-size: xxx-large;">Login</h2>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn-primary">Log in</button>
                        <br>
                        <br>
                        <br>
                        <a href="signup.php">Not a member? Click here!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>