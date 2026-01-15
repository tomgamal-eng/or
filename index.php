<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="assets/videos/sbkg.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
        <h1><?php echo t('hero_title'); ?></h1>
        <h2><?php echo t('hero_subtitle'); ?></h2>
        <p class="hero-tagline"><?php echo t('hero_tagline'); ?></p>
    </div>
</section>

<!-- Four Boxes Section -->
<section class="boxes-section">
    <div class="boxes-grid">
        <!-- Box 1: Raum Mieten -->
        <div class="box-card">
            <div class="box-icon">🏠</div>
            <h3><?php echo t('box1_title'); ?></h3>
            <p><?php echo t('box1_text'); ?></p>
            <a href="rent.php?lang=<?php echo $lang; ?>" class="box-button">
                <?php echo t('box1_button'); ?>
            </a>
        </div>
        
        <!-- Box 2: Unser Team -->
        <div class="box-card">
            <div class="box-icon">👥</div>
            <h3><?php echo t('box2_title'); ?></h3>
            <p><?php echo t('box2_text'); ?></p>
            <a href="team.php?lang=<?php echo $lang; ?>" class="box-button">
                <?php echo t('box2_button'); ?>
            </a>
        </div>
        
        <!-- Box 3: Therapeuten -->
        <div class="box-card">
            <div class="box-icon">🌿</div>
            <h3><?php echo t('box3_title'); ?></h3>
            <p><?php echo t('box3_text'); ?></p>
            <a href="therapists.php?lang=<?php echo $lang; ?>" class="box-button">
                <?php echo t('box3_button'); ?>
            </a>
        </div>
        
        <!-- Box 4: Video Production -->
        <div class="box-card">
            <div class="box-icon">🎥</div>
            <h3><?php echo t('box4_title'); ?></h3>
            <p><?php echo t('box4_text'); ?></p>
            <a href="video.php?lang=<?php echo $lang; ?>" class="box-button">
                <?php echo t('box4_button'); ?>
            </a>
        </div>

	<!-- Box 5: The Journey -->
<div class="box-card">
    <div class="box-icon">🐉</div>
    <h3><?php echo t('box5_title'); ?></h3>
    <p><?php echo t('box5_text'); ?></p>
    <a href="the-journey.php?lang=<?php echo $lang; ?>" class="box-button">
        <?php echo t('box5_button'); ?>
    </a>
</div>	
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-content">
        <h2><?php echo t('cta_text'); ?></h2>
        <a href="contact.php?lang=<?php echo $lang; ?>" class="cta-button">
            <?php echo t('cta_button'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
