<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php require_once("../components/header.php"); ?>

    <main>
        <?php require_once("../components/midContent/ourHerous.php"); ?>
        
        <?php require_once("../components/lowContent/weeklyDigest.php"); ?>

        <?php require_once("../components/lowContent/press.php"); ?>

        <?php require_once("../components/lowContent/podcast.php"); ?>
    </main>
    <footer>
        <?php require_once("../components/footer.php"); ?>
    </footer>
</body>

</html>