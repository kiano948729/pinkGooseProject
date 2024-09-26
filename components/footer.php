<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<footer>
    <div class="footer-links">
        <a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
        <a href="jobs.php" class="<?php echo $current_page == 'jobs.php' ? 'active' : ''; ?>">Jobs</a>
        <a href="legal.php" class="<?php echo $current_page == 'legal.php' ? 'active' : ''; ?>"><span
                class="legal">Legal</span></a>

        <div class="footer-social">
            <a href="https://www.example.com" target="_blank">
                <img src="../img/social_app/Frame 5609.png" alt="hier hoort een logo te staan" class="photo-icon-posit">
            </a>
            <a href="https://www.example.com" target="_blank">
                <img src="../img/social_app/Frame 5607.png" alt="hier hoort een logo te staan" class="photo-icon-posit">
            </a>
            <a href="https://www.example.com" target="_blank">
                <img src="../img/social_app/Frame 5608.png" alt="hier hoort een logo te staan" class="photo-icon-posit">
            </a>
            <a href="https://www.example.com" target="_blank">
                <img src="../img/social_app/Frame 5606.png" alt="hier hoort een logo te staan" class="photo-icon-posit">
            </a>
        </div>
    </div>
</footer>