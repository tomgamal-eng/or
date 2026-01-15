<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="practitioner-hero">
    <div class="hero-content">
        <h1><?php echo t('manuela_hero_name'); ?></h1>
        <h2><?php echo t('manuela_hero_specialty'); ?></h2>
        <div class="hero-image-placeholder">
            <img src="assets/images/therapists/manuela.jpg" alt="Manuela Spaggiari" class="hero-image">
        </div>
    </div>
</section>

<!-- About Thai Yoga Massage -->
<section class="practitioner-section">
    <div class="section-content">
        <h2><?php echo t('manuela_about_title'); ?></h2>
        <p><?php echo t('manuela_about_text1'); ?></p>
        <p><?php echo t('manuela_about_text2'); ?></p>
    </div>
</section>

<!-- Benefits -->
<section class="practitioner-section" style="background: #F9F7F4;">
    <div class="section-content">
        <h2><?php echo t('manuela_benefits_title'); ?></h2>
        <p><?php echo t('manuela_benefits_intro'); ?></p>
        <ul class="benefits-list">
            <li><?php echo t('manuela_benefit1'); ?></li>
            <li><?php echo t('manuela_benefit2'); ?></li>
            <li><?php echo t('manuela_benefit3'); ?></li>
            <li><?php echo t('manuela_benefit4'); ?></li>
            <li><?php echo t('manuela_benefit5'); ?></li>
        </ul>
        <p><?php echo t('manuela_benefits_conclusion'); ?></p>
    </div>
</section>

<!-- Contact Section -->
<section class="practitioner-contact-section">
    <div class="section-content">
        <h2><?php echo t('manuela_contact_title'); ?></h2>
        <div class="contact-details">
            <p>📞 <strong><?php echo t('manuela_contact_phone'); ?>:</strong> 0049 152 518 98 056</p>
            <p>✉️ <strong><?php echo t('manuela_contact_email'); ?>:</strong> info@manuela-yoga-massage.com</p>
            <p>🌐 <strong><?php echo t('manuela_contact_website'); ?>:</strong> <a href="https://www.manuela-yoga-massage.com" target="_blank">www.manuela-yoga-massage.com</a></p>
        </div>
        <a href="mailto:info@manuela-yoga-massage.com" class="contact-button">
            <?php echo t('manuela_contact_button'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
