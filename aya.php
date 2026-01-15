<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="personal-hero">
    <h1><?php echo t('aya_name'); ?></h1>
    <h2><?php echo t('aya_hero_subtitle'); ?></h2>
</section>

<!-- Main Content -->
<div class="personal-content">
    
    <!-- Introduction -->
    <section class="personal-section">
        <h2><?php echo t('aya_intro_title'); ?></h2>
        <p><?php echo t('aya_intro_text'); ?></p>
    </section>
    
    <!-- Services Section -->
    <section class="personal-section">
        <h2><?php echo t('aya_services_title'); ?></h2>
        
        <div class="personal-service-box">
            <h3><?php echo t('aya_service1_title'); ?></h3>
            <p><?php echo t('aya_service1_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('aya_service2_title'); ?></h3>
            <p><?php echo t('aya_service2_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('aya_service3_title'); ?></h3>
            <p><?php echo t('aya_service3_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('aya_service4_title'); ?></h3>
            <p><?php echo t('aya_service4_text'); ?></p>
        </div>
    </section>
    
    <!-- Prices Section -->
    <section class="personal-section">
        <div class="personal-services">
            <h3><?php echo t('aya_prices_title'); ?></h3>
            
            <div class="personal-prices">
                <div class="personal-price-item"><?php echo t('aya_price_60'); ?></div>
                <div class="personal-price-item"><?php echo t('aya_price_90'); ?></div>
                <div class="personal-price-item"><?php echo t('aya_price_120'); ?></div>
            </div>
            
            <p style="margin-top: 25px; font-size: 16px;">
                <a href="https://ayamo.life" target="_blank" style="color: #4A7C59; text-decoration: underline;">
                    <?php echo t('aya_more_info'); ?>
                </a>
            </p>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="personal-gallery">
        <h2><?php echo t('aya_gallery_title'); ?></h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-placeholder">🌸</div>
            </div>
            <div class="gallery-item">
                <div class="gallery-placeholder">🌸</div>
            </div>
        </div>
    </section>
    
</div>

<!-- CTA Section -->
<section class="personal-cta">
    <h2><?php echo t('aya_cta_title'); ?></h2>
    <div class="personal-cta-buttons">
        <a href="https://tommassage.de/booking/" target="_blank" class="personal-cta-button">
            <?php echo t('book_appointment'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
