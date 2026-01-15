<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="personal-hero">
    <h1><?php echo t('tom_name'); ?></h1>
    <h2><?php echo t('tom_hero_subtitle'); ?></h2>
    <p class="personal-hero-quote"><?php echo t('tom_hero_quote'); ?></p>
</section>

<!-- Main Content -->
<div class="personal-content">
    
    <!-- About Section -->
    <section class="personal-section">
        <h2><?php echo t('tom_about_title'); ?></h2>
        <p><?php echo t('tom_about_text'); ?></p>
    </section>
    
    <!-- Trauma & Healing Section -->
    <section class="personal-section">
        <h2><?php echo t('tom_trauma_title'); ?></h2>
        <p><?php echo t('tom_trauma_text'); ?></p>
    </section>
    
    <!-- Techniques Section -->
    <section class="personal-section">
        <h2><?php echo t('tom_techniques_title'); ?></h2>
        <ul class="personal-techniques">
            <li><?php echo t('tom_tech1'); ?></li>
            <li><?php echo t('tom_tech2'); ?></li>
            <li><?php echo t('tom_tech3'); ?></li>
            <li><?php echo t('tom_tech4'); ?></li>
            <li><?php echo t('tom_tech5'); ?></li>
        </ul>
    </section>
    
    <!-- Services & Prices -->
    <section class="personal-section">
        <div class="personal-services">
            <h3><?php echo t('tom_services_title'); ?></h3>
            <p><?php echo t('tom_services_note'); ?></p>
            
            <div class="personal-prices">
                <div class="personal-price-item"><?php echo t('tom_price_60'); ?></div>
                <div class="personal-price-item"><?php echo t('tom_price_90'); ?></div>
                <div class="personal-price-item"><?php echo t('tom_price_120'); ?></div>
                <div class="personal-price-item"><?php echo t('tom_price_partner'); ?></div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="personal-gallery">
        <h2><?php echo t('tom_gallery_title'); ?></h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-placeholder">🐉</div>
            </div>
            <div class="gallery-item">
                <div class="gallery-placeholder">🐉</div>
            </div>
            <div class="gallery-item">
                <div class="gallery-placeholder">🐉</div>
            </div>
        </div>
    </section>
    
</div>

<!-- CTA Section -->

	<section class="personal-cta">
    <h2><?php echo t('tom_cta_title'); ?></h2>
    <div class="personal-cta-buttons">
        <a href="the-journey.php?lang=<?php echo $lang; ?>" class="personal-cta-button">
            The Journey
        </a>
        <a href="yellow-dragon.php?lang=<?php echo $lang; ?>" class="personal-cta-button">
            <?php echo t('yellow_dragon_button'); ?>
        </a>
        <a href="https://tommassage.de/booking/" target="_blank" class="personal-cta-button">
            <?php echo t('book_appointment'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
