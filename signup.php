<html>

<head>
    <title>Sign up - Blubbr</title>
    <link rel="shortcut-icon" href="Blubbr.png">
    <link rel="stylesheet" href="style.css">
    <h1 style="font-size: xxx-large;">Blubbr</h1>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6" style="align-items: center;">
                    <h2 style="font-size: xxx-large;">Sign up</h2>
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label>Choose a Username</label>
                            <input type="text" name="user" class="form-control" minlength="3" required>
                        </div>

                        <div class="form-group">
                            <label>Create a Password</label>
                            <input type="password" name="password" class="form-control" minlength="8" required>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn-primary">Log in</button>
                        <br>
                        <br>
                        <br>
                        <a href="login.php">Already a member? Click here!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>