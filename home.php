<?php
    session_start()
?>


<html>

<head>
    <link rel="Stylesheet" href="homestyle.css">
    <form class="container">
        <div class="topbar">
            <form action="">
                <button onclick="click" class="home-btn">Home</button>
            </form>
        </div>

    </form>
    Welcome back <?php echo $_SESSION['username'] ?>
    <title>Home - Blubbr</title>
    <link rel="shortcut-icon" href="Blubbr.png">

</head>

</html>