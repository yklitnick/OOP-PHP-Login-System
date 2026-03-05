<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <div>
                <h3>YITZCHOK KLITNICK</h3>
                <ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER+</a></li>
                </ul>
            </div>
            <div>
                <ul class="menu-member">
                    <?php
                    if (isset($_SESSION["usersid"])) {
                    ?>
                        <li><a href="profile.php"><?php echo $_SESSION["usersuid"]; ?></a></li>
                        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="#">SIGN UP</a></li>
                        <li><a href="#" class="header-login-a">LOGIN</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>