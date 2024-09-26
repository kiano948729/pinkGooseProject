<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header-container">
        <div class="title">
            <h1><span class="titleP">Pink</span> <span class="titleG">Goose</span></h1>
        </div>
        <div class="nav-links">
            <a href="../index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="../resource/learn.php"
                class="<?php echo $current_page == 'learn.php' ? 'active' : ''; ?>">Learn</a>
            <a href="../resource/about.php"
                class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
            <a href="../resource/contact.php"
                class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>
        </div>
        <div class="login-link">
            <a href="../resource/login.php"
                class="<?php echo $current_page == 'login.php' ? 'active' : ''; ?>">Login</a>
        </div>
    </div>
</header>