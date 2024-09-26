<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php require_once "../components/header.php"; ?>
    <main>
        <div class="login-posi">
            <div class="loginInd">

                <form action="/backend/loginController.php" method="POST">
                    <div class="form-login">
                        <label class="labLogin" for="username">Gebruikersnaam</label>
                        <input type="text" name="username" id="username">
                    </div>

                    <div class="form-login">
                        <label class="labLogin" for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                    </div>

                    <!-- <input class="loginIn" type="submit"value="Login"> dit is eigenlijk de echte login alleen ik heb geen backend voor dit gedaan :) -->
                    <div class="login-links">
                        <a href="../index.php"
                            class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Login</a>
                    </div>
                    <div class="login-links">
                        <a href="../index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Geen
                            account</a>
                    </div>
                </form>

            </div>
        </div>

    </main>
</body>

</html>