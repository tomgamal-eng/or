<!-- Navigation -->
<nav class="main-nav">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="index.php?lang=<?php echo $lang; ?>">
                OR Natural Balance
            </a>
        </div>

        <button class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo t('nav_home'); ?></a></li>
            <li><a href="rent.php?lang=<?php echo $lang; ?>"><?php echo t('nav_rent'); ?></a></li>
            <li><a href="team.php?lang=<?php echo $lang; ?>"><?php echo t('nav_team'); ?></a></li>
            <li><a href="therapists.php?lang=<?php echo $lang; ?>"><?php echo t('nav_therapeuten'); ?></a></li>
            <li><a href="video.php?lang=<?php echo $lang; ?>"><?php echo t('nav_video'); ?></a></li>
            <li><a href="the-journey.php?lang=<?php echo $lang; ?>"><?php echo t('nav_journey'); ?></a></li>
            <li><a href="contact.php?lang=<?php echo $lang; ?>"><?php echo t('nav_contact'); ?></a></li>
            <li class="nav-lang">
                <a href="?lang=<?php echo $lang == 'de' ? 'en' : 'de'; ?>">
                    <?php echo t('nav_lang_switch'); ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
