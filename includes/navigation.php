<nav class="main-nav">
    <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php?lang=<?php echo $lang; ?>">
                <img src="assets/images/OR_Logo2.png" alt="Natural Balance" class="logo-image">
            </a>
        </div>
        
        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <!-- Navigation Menu -->
        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo t('nav_home'); ?></a></li>
            <li><a href="the-journey.php?lang=<?php echo $lang; ?>">The Journey</a></li>
            <li><a href="team.php?lang=<?php echo $lang; ?>"><?php echo t('nav_team'); ?></a></li>
            <li><a href="rent.php?lang=<?php echo $lang; ?>"><?php echo t('nav_rent'); ?></a></li>
            <li><a href="therapists.php?lang=<?php echo $lang; ?>"><?php echo t('nav_therapists'); ?></a></li>
            <li><a href="video-production.php?lang=<?php echo $lang; ?>"><?php echo t('nav_video'); ?></a></li>
            <li><a href="contact.php?lang=<?php echo $lang; ?>"><?php echo t('nav_contact'); ?></a></li>
        </ul>
        
        <!-- Language Switcher -->
        <div class="lang-switcher">
            <a href="<?php echo langUrl('de'); ?>" class="<?php echo $lang === 'de' ? 'active' : ''; ?>">DE</a>
            <span class="separator">|</span>
            <a href="<?php echo langUrl('en'); ?>" class="<?php echo $lang === 'en' ? 'active' : ''; ?>">EN</a>
        </div>
    </div>
</nav>
