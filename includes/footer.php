<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-left">
            <p><?php echo t('footer_address'); ?></p>
        </div>
        
        <div class="footer-center">
            <p>
                <?php echo t('footer_phone'); ?> | 
                <?php echo t('footer_email'); ?>
            </p>
        </div>
        
        <div class="footer-right">
            <a href="terms.php?lang=<?php echo $lang; ?>"><?php echo t('footer_terms'); ?></a>
            <span class="separator">|</span>
            <a href="imprint.php?lang=<?php echo $lang; ?>"><?php echo t('footer_imprint'); ?></a>
        </div>
    </div>
</footer>

<!-- Mobile Menu Script -->
<script>
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            mobileMenuToggle.classList.toggle('active');
        });
    }
</script>

</body>
</html>
