<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="yd-hero">
    <h1><?php echo t('yd_hero_title'); ?></h1>
    <h2><?php echo t('yd_hero_subtitle'); ?></h2>
    <p><?php echo t('yd_hero_tagline'); ?></p>
</section>

<!-- Main Content -->
<div class="yd-content">
    
    <!-- Introduction -->
    <section class="yd-section">
        <h2><?php echo t('yd_intro_title'); ?></h2>
        <p><?php echo t('yd_intro_text'); ?></p>
    </section>
    
    <!-- The Goal -->
    <section class="yd-section">
        <h2><?php echo t('yd_goal_title'); ?></h2>
        <p><?php echo t('yd_goal_text'); ?></p>
    </section>
    
    <!-- Core Concepts -->
    <section class="yd-section">
        <h2><?php echo t('yd_concepts_title'); ?></h2>
        <div class="yd-concepts-grid">
            <div class="yd-concept-card">
                <h3><?php echo t('yd_concept1_title'); ?></h3>
                <p><?php echo t('yd_concept1_text'); ?></p>
            </div>
            <div class="yd-concept-card">
                <h3><?php echo t('yd_concept2_title'); ?></h3>
                <p><?php echo t('yd_concept2_text'); ?></p>
            </div>
            <div class="yd-concept-card">
                <h3><?php echo t('yd_concept3_title'); ?></h3>
                <p><?php echo t('yd_concept3_text'); ?></p>
            </div>
            <div class="yd-concept-card">
                <h3><?php echo t('yd_concept4_title'); ?></h3>
                <p><?php echo t('yd_concept4_text'); ?></p>
            </div>
        </div>
    </section>
    
    <!-- Approach -->
    <section class="yd-section">
        <h2><?php echo t('yd_approach_title'); ?></h2>
        <p><?php echo t('yd_approach_intro'); ?></p>
        <ul class="yd-approach-list">
            <li><?php echo t('yd_approach1'); ?></li>
            <li><?php echo t('yd_approach2'); ?></li>
            <li><?php echo t('yd_approach3'); ?></li>
            <li><?php echo t('yd_approach4'); ?></li>
        </ul>
    </section>
    
    <!-- Techniques -->
    <section class="yd-section">
        <h2><?php echo t('yd_techniques_title'); ?></h2>
        <div class="yd-techniques">
            <div class="yd-technique-box">
                <h3><?php echo t('yd_physical_title'); ?></h3>
                <p><?php echo t('yd_physical_text'); ?></p>
            </div>
            <div class="yd-technique-box">
                <h3><?php echo t('yd_energetic_title'); ?></h3>
                <p><?php echo t('yd_energetic_text'); ?></p>
            </div>
        </div>
    </section>
    
    <!-- The System -->
    <section class="yd-section">
        <h2><?php echo t('yd_system_title'); ?></h2>
        <p><?php echo t('yd_system_text'); ?></p>
    </section>
    
    <!-- About Keshet Tom -->
    <section class="yd-section">
        <h2><?php echo t('yd_about_title'); ?></h2>
        <p><?php echo t('yd_about_text'); ?></p>
    </section>
    
</div>

<!-- CTA Section -->
<section class="yd-cta">
    <h2><?php echo t('yd_cta_title'); ?></h2>
    <p><?php echo t('yd_cta_text'); ?></p>
    <a href="https://tommassage.de/booking/" target="_blank" class="yd-cta-button">
        <?php echo t('yd_cta_button'); ?>
    </a>
</section>
	<!-- Journey CTA Section -->
<section class="yd-journey-cta" style="background: #E8F5E9; padding: 60px 40px; text-align: center; margin-top: 40px;">
    <h2 style="font-family: var(--font-heading); font-size: 32px; color: #2C3E50; margin-bottom: 15px;">
        Ready for the journey?
    </h2>
    <p style="font-size: 18px; color: #555; margin-bottom: 25px;">
        Learn about the full Yellow Dragon Journey experience
    </p>
    <a href="the-journey.php?lang=<?php echo $lang; ?>" 
       style="display: inline-block; background: #4A7C59; color: white; padding: 15px 40px; border-radius: 8px; text-decoration: none; font-size: 17px; font-weight: 600; transition: all 0.3s ease;">
        Discover The Journey
    </a>
</section>


<?php include 'includes/footer.php'; ?>
