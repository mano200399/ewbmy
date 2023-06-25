<?php
require 'config/constants.php';
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phraon Egypt</title>

    <!--custom stylesheet-->
    <link rel="stylesheet" href="./css/style.css">

    <!--icon cdn-->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--google fot size-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>


<section class="form_section">
    <div class="container form_section-container">
         <h2>Sign In</h2>
         <?php if (isset($_SESSION['signup-success'])) : ?>
            <div class="alert_message success">
                <p>
                    <?= $_SESSION['signup-success']; ?>
                </p>
            </div>
            <?php unset($_SESSION['signup-success']); ?>
        <?php elseif(isset($_SESSION['signin'])) : ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['signin']; ?>
                </p>
            </div>
            <?php unset($_SESSION['signin']); ?>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Username or Email">
            <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have account? <a href="signup.php">Sign up</a></small>
        </form>
    </div>
</section>

</body>
</html>