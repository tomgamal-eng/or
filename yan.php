<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="personal-hero">
    <h1><?php echo t('yan_name'); ?></h1>
    <h2><?php echo t('yan_hero_subtitle'); ?></h2>
</section>

<!-- Main Content -->
<div class="personal-content">
    
    <!-- Introduction -->
    <section class="personal-section">
        <h2><?php echo t('yan_intro_title'); ?></h2>
        <p><?php echo t('yan_intro_text'); ?></p>
    </section>
    
    <!-- Services Section -->
    <section class="personal-section">
        <h2><?php echo t('yan_services_title'); ?></h2>
        
        <div class="personal-service-box">
            <h3><?php echo t('yan_service1_title'); ?></h3>
            <p><?php echo t('yan_service1_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('yan_service2_title'); ?></h3>
            <p><?php echo t('yan_service2_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('yan_service3_title'); ?></h3>
            <p><?php echo t('yan_service3_text'); ?></p>
        </div>
        
        <div class="personal-service-box">
            <h3><?php echo t('yan_service4_title'); ?></h3>
            <p><?php echo t('yan_service4_text'); ?></p>
        </div>
    </section>
    
    <!-- Prices Section -->
    <section class="personal-section">
        <div class="personal-services">
            <h3><?php echo t('yan_prices_title'); ?></h3>
            
            <div class="personal-prices">
                <div class="personal-price-item"><?php echo t('yan_price_60'); ?></div>
                <div class="personal-price-item"><?php echo t('yan_price_90'); ?></div>
                <div class="personal-price-item"><?php echo t('yan_price_120'); ?></div>
            </div>
            
            <p style="margin-top: 25px; font-size: 16px; font-style: italic;">
                <?php echo t('yan_special_sessions_note'); ?>
            </p>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="personal-gallery">
        <h2><?php echo t('yan_gallery_title'); ?></h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-placeholder">🌿</div>
            </div>
            <div class="gallery-item">
                <div class="gallery-placeholder">🌿</div>
            </div>
        </div>
    </section>
    
</div>

<!-- CTA Section -->
<section class="personal-cta">
    <h2><?php echo t('yan_cta_title'); ?></h2>
    <div class="personal-cta-buttons">
        <a href="https://tommassage.de/booking/" target="_blank" class="personal-cta-button">
            <?php echo t('book_appointment'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
