<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="journey-hero">
    <h1><?php echo t('journey_hero_title'); ?></h1>
    <h2><?php echo t('journey_hero_subtitle'); ?></h2>
    <p class="journey-hero-tagline"><?php echo t('journey_hero_tagline'); ?></p>
</section>

<!-- Main Content -->
<div class="journey-content">
    
    <!-- The Problem -->
    <section class="journey-section">
        <h2><?php echo t('journey_problem_title'); ?></h2>
        <p><?php echo t('journey_problem_text'); ?></p>
    </section>
    
    <!-- The Solution -->
    <section class="journey-section">
        <h2><?php echo t('journey_solution_title'); ?></h2>
        <p><?php echo t('journey_solution_text'); ?></p>
        
        <h3><?php echo t('journey_includes_title'); ?></h3>
        <ul class="journey-includes-list">
            <li><?php echo t('journey_include1'); ?></li>
            <li><?php echo t('journey_include2'); ?></li>
            <li><?php echo t('journey_include3'); ?></li>
            <li><?php echo t('journey_include4'); ?></li>
            <li><?php echo t('journey_include5'); ?></li>
        </ul>
    </section>
    
    <!-- Learn About Method First -->
    <section class="journey-section" style="background-color: #F9F7F4; padding: 60px 20px; text-align: center;">
        <h2><?php echo t('journey_method_title'); ?></h2>
        <p style="max-width: 700px; margin: 20px auto 30px;"><?php echo t('journey_method_text'); ?></p>
        <a href="yellow-dragon.php?lang=<?php echo $lang; ?>" class="journey-cta-button">
            <?php echo t('journey_method_button'); ?>
        </a>
    </section>
    
    <!-- Is This Right for You -->
    <section class="journey-section">
        <h2><?php echo t('journey_right_title'); ?></h2>
        <ul class="journey-checklist">
            <li><?php echo t('journey_check1'); ?></li>
            <li><?php echo t('journey_check2'); ?></li>
            <li><?php echo t('journey_check3'); ?></li>
            <li><?php echo t('journey_check4'); ?></li>
        </ul>
    </section>
    
    <!-- The First Step -->
    <section class="journey-section">
        <h2><?php echo t('journey_first_step_title'); ?></h2>
        <p><?php echo t('journey_first_step_text'); ?></p>
        
        <div class="journey-packages">
            
            <!-- Alignment Call -->
            <div class="journey-package-card">
                <h3><?php echo t('journey_alignment_title'); ?></h3>
                <p class="package-price"><?php echo t('journey_alignment_price'); ?></p>
                <ul class="package-details">
                    <li><?php echo t('journey_alignment_detail1'); ?></li>
                    <li><?php echo t('journey_alignment_detail2'); ?></li>
                    <li><?php echo t('journey_alignment_detail3'); ?></li>
                </ul>
                <a href="https://tommassage.de/booking/" target="_blank" class="journey-cta-button">
                    <?php echo t('journey_alignment_button'); ?>
                </a>
            </div>
            
            <!-- The Journey Package -->
            <div class="journey-package-card journey-main-package">
                <h3><?php echo t('journey_package_title'); ?></h3>
                <p class="package-price-large"><?php echo t('journey_package_price'); ?></p>
                
                <h4><?php echo t('journey_package_includes'); ?></h4>
                <ul class="package-details">
                    <li><?php echo t('journey_package_item1'); ?></li>
                    <li><?php echo t('journey_package_item2'); ?></li>
                    <li><?php echo t('journey_package_item3'); ?></li>
                    <li><?php echo t('journey_package_item4'); ?></li>
                    <li><?php echo t('journey_package_item5'); ?></li>
                </ul>
                
                <h4><?php echo t('journey_optional_title'); ?></h4>
                <p><?php echo t('journey_optional_text'); ?></p>
                
                <h4><?php echo t('journey_investment_title'); ?></h4>
                <ul class="package-pricing">
                    <li><?php echo t('journey_investment_3'); ?></li>
                    <li><?php echo t('journey_investment_4'); ?></li>
                    <li><?php echo t('journey_investment_5'); ?></li>
                </ul>
            </div>
            
        </div>
    </section>
    
    <!-- Disclaimer -->
    <section class="journey-disclaimer">
        <p><?php echo t('journey_disclaimer'); ?></p>
    </section>
    
    <!-- Alternative Option -->
    <section class="journey-section journey-alternative">
        <h2><?php echo t('journey_alternative_title'); ?></h2>
        <p><?php echo t('journey_alternative_text'); ?></p>
        <div style="display: flex; gap: 20px; justify-content: center; margin-top: 30px; flex-wrap: wrap;">
            <a href="tom.php?lang=<?php echo $lang; ?>" class="journey-cta-button">
                <?php echo t('journey_alternative_button1'); ?>
            </a>
            <a href="https://tommassage.de/booking/" target="_blank" class="journey-cta-button" style="background-color: #D4AF37;">
                <?php echo t('journey_alternative_button2'); ?>
            </a>
        </div>
    </section>
    
</div>

<?php include 'includes/footer.php'; ?>
