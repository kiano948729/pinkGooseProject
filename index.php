<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>pinkGoose</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once("components/header.php"); ?>


    <div class="front-text">
        <h1 class="mainText">The Easiest way</h1>
        <h1 class="mainTextL2">to start a Goose</h1>
        <div>
            <p class="mainText2">An all-in-one platform to start, manage and grow</p>
            <p class="mainText2">a decentralized autonomous organization</p>
        </div>
        <div class="front-text-button">
            <a href="learn.php"><span class="getStarted">Get started</span></a>
        </div>
    </div>
    <div class="miscellaneous-pic1">
        <img src="img/miscellaneous/Frame 5764.png" alt="" />
    </div>

    <main>

        <?php require_once("components/midContent/mainPicture.php"); ?>

        <?php require_once("components/midContent/designedFJour.php"); ?>

        <?php require_once("components/midContent/iconFrame.php"); ?>

        <?php require_once("components/midContent/helpATVS.php"); ?>

        <?php require_once("components/lowContent/weeklyDigest.php"); ?>

        <?php require_once("components/lowContent/press.php"); ?>

        <?php require_once("components/lowContent/podcast.php"); ?>

        <div class="miscellaneous-pic2">
            <img src="img/miscellaneous/Group 5597.png" alt="" />
        </div>

        <?php require_once("components/lowContent/gooseIdea.php"); ?>

    </main>
    <footer>
        <?php require_once("components/footer.php"); ?>
    </footer>
</body>

</html>