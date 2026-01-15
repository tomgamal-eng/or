<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="video-hero">
    <div class="video-hero-content">
        <h1><?php echo t('video_hero_title'); ?></h1>
        <h2><?php echo t('video_hero_subtitle'); ?></h2>
        <img src="assets/images/micha/micha01.PNG" alt="Mischa Tartsch" class="video-hero-image">
    </div>
</section>

<!-- Services Section -->
<section class="video-services">
    <h2><?php echo t('video_services_title'); ?></h2>
    <div class="services-grid">
        
        <div class="service-card">
            <div class="service-icon">🎥</div>
            <h3><?php echo t('video_service1_title'); ?></h3>
            <p><?php echo t('video_service1_text'); ?></p>
        </div>
        
        <div class="service-card">
            <div class="service-icon">📱</div>
            <h3><?php echo t('video_service2_title'); ?></h3>
            <p><?php echo t('video_service2_text'); ?></p>
        </div>
        
        <div class="service-card">
            <div class="service-icon">🎙️</div>
            <h3><?php echo t('video_service3_title'); ?></h3>
            <p><?php echo t('video_service3_text'); ?></p>
        </div>
        
        <div class="service-card">
            <div class="service-icon">🎬</div>
            <h3><?php echo t('video_service4_title'); ?></h3>
            <p><?php echo t('video_service4_text'); ?></p>
        </div>
        
        <div class="service-card">
            <div class="service-icon">🏢</div>
            <h3><?php echo t('video_service5_title'); ?></h3>
            <p><?php echo t('video_service5_text'); ?></p>
        </div>
        
        <div class="service-card">
            <div class="service-icon">📸</div>
            <h3><?php echo t('video_service6_title'); ?></h3>
            <p><?php echo t('video_service6_text'); ?></p>
        </div>
        
    </div>
</section>

<!-- Flexible Production Section -->
<section class="video-flexible">
    <h2><?php echo t('video_flexible_title'); ?></h2>
    <div class="flexible-content">
        <div class="flexible-image">
            <img src="assets/images/micha/micha02.png" alt="Production Setup">
        </div>
        <div class="flexible-text">
            <div class="flexible-item">
                <h3><?php echo t('video_studio_title'); ?></h3>
                <p><?php echo t('video_studio_text'); ?></p>
            </div>
            <div class="flexible-item">
                <h3><?php echo t('video_onsite_title'); ?></h3>
                <p><?php echo t('video_onsite_text'); ?></p>
            </div>
            <div class="flexible-item">
                <h3><?php echo t('video_drone_title'); ?></h3>
                <p><?php echo t('video_drone_text'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="video-process">
    <h2><?php echo t('video_process_title'); ?></h2>
    <div class="process-steps">
        
        <div class="process-step">
            <div class="step-number">1</div>
            <h3><?php echo t('video_step1_title'); ?></h3>
            <p><?php echo t('video_step1_text'); ?></p>
        </div>
        
        <div class="process-step">
            <div class="step-number">2</div>
            <h3><?php echo t('video_step2_title'); ?></h3>
            <p><?php echo t('video_step2_text'); ?></p>
        </div>
        
        <div class="process-step">
            <div class="step-number">3</div>
            <h3><?php echo t('video_step3_title'); ?></h3>
            <p><?php echo t('video_step3_text'); ?></p>
        </div>
        
        <div class="process-step">
            <div class="step-number">4</div>
            <h3><?php echo t('video_step4_title'); ?></h3>
            <p><?php echo t('video_step4_text'); ?></p>
        </div>
        
    </div>
</section>

<!-- Technical Excellence Section -->
<section class="video-tech">
    <h2><?php echo t('video_tech_title'); ?></h2>
    <p class="tech-intro"><?php echo t('video_tech_intro'); ?></p>
    <ul class="tech-list">
        <li>✅ <?php echo t('video_tech1'); ?></li>
        <li>✅ <?php echo t('video_tech2'); ?></li>
        <li>✅ <?php echo t('video_tech3'); ?></li>
        <li>✅ <?php echo t('video_tech4'); ?></li>
        <li>✅ <?php echo t('video_tech5'); ?></li>
        <li>✅ <?php echo t('video_tech6'); ?></li>
        <li>✅ <?php echo t('video_tech7'); ?></li>
    </ul>
</section>

<!-- Long-Term Content Strategy -->
<section class="video-strategy">
    <h2><?php echo t('video_strategy_title'); ?></h2>
    <div class="strategy-boxes">
        
        <div class="strategy-box">
            <h3><?php echo t('video_retainer_title'); ?></h3>
            <p><?php echo t('video_retainer_text'); ?></p>
        </div>
        
        <div class="strategy-box">
            <h3><?php echo t('video_podcast_title'); ?></h3>
            <p><?php echo t('video_podcast_intro'); ?></p>
            <ul>
                <li><?php echo t('video_podcast1'); ?></li>
                <li><?php echo t('video_podcast2'); ?></li>
                <li><?php echo t('video_podcast3'); ?></li>
            </ul>
        </div>
        
    </div>
</section>

<!-- Studio Renter Bonus -->
<section class="video-bonus">
    <h2><?php echo t('video_bonus_title'); ?></h2>
    <p class="bonus-intro"><?php echo t('video_bonus_intro'); ?></p>
    
    <div class="bonus-items">
        <div class="bonus-item">
            <h4>✅ <?php echo t('video_bonus1_title'); ?></h4>
            <p><?php echo t('video_bonus1_sub'); ?></p>
        </div>
        
        <div class="bonus-item">
            <h4>✅ <?php echo t('video_bonus2_title'); ?></h4>
            <p><?php echo t('video_bonus2_sub'); ?></p>
        </div>
        
        <div class="bonus-item">
            <h4>✅ <?php echo t('video_bonus3_title'); ?></h4>
            <p><?php echo t('video_bonus3_sub'); ?></p>
        </div>
    </div>
    
    <p class="bonus-extra"><?php echo t('video_bonus_extra'); ?></p>
    
    <a href="rent.php?lang=<?php echo $lang; ?>" class="bonus-button">
        <?php echo t('video_bonus_button'); ?>
    </a>
</section>

<!-- About Mischa -->
<section class="video-about">
    <h2><?php echo t('video_about_title'); ?></h2>
    <div class="about-content">
        <p><?php echo t('video_about_p1'); ?></p>
        <p><strong><?php echo t('video_about_p2'); ?></strong></p>
        <p><?php echo t('video_about_p3'); ?></p>
        <p><?php echo t('video_about_p4'); ?></p>
    </div>
</section>

<!-- References Section -->
<section class="video-references">
    <h2><?php echo t('video_references_title'); ?></h2>
    <div class="reference-video">
        <video controls>
            <source src="assets/images/micha/Referenz-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="video-cta">
    <h2><?php echo t('video_cta_title'); ?></h2>
    <p><?php echo t('video_cta_text'); ?></p>
    <div class="cta-contact">
        <p>📞 <strong><?php echo t('video_cta_phone'); ?>:</strong> 0160 2217349</p>
        <p>✉️ <strong><?php echo t('video_cta_email'); ?>:</strong> mtartsch@googlemail.com</p>
    </div>
    <a href="mailto:mtartsch@googlemail.com" class="cta-button-large">
        <?php echo t('video_cta_button'); ?>
    </a>
</section>

<?php include 'includes/footer.php'; ?>
