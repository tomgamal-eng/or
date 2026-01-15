<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="legal-hero">
    <h1><?php echo t('contact_hero_title'); ?></h1>
    <p><?php echo t('contact_hero_subtitle'); ?></p>
</section>

<!-- Contact Content -->
<div class="legal-content">
    <div class="contact-grid">
        
        <!-- Contact Info -->
        <div class="contact-info">
            
            <div class="contact-info-item">
                <h3><?php echo t('contact_address_title'); ?></h3>
                <p>
                    OR Natural Balance<br>
                    Immanuelkirchstraße 22<br>
                    10405 Berlin
                </p>
            </div>
            
            <div class="contact-info-item">
                <h3><?php echo t('contact_phone_title'); ?></h3>
                <p><a href="tel:+4917624224224">0176-242-242-24</a></p>
            </div>
            
            <div class="contact-info-item">
                <h3><?php echo t('contact_email_title'); ?></h3>
                <p><a href="mailto:natural.balance.berlin@gmail.com">natural.balance.berlin@gmail.com</a></p>
            </div>
            
        </div>
        
        <!-- Google Maps -->
        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.3166817892744!2d13.416666315771234!3d52.53583997981462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e3b7d3c0001%3A0x1234567890abcdef!2sImmanuelkirchstra%C3%9Fe%2022%2C%2010405%20Berlin!5e0!3m2!1sen!2sde!4v1234567890123!5m2!1sen!2sde" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        
    </div>
</div>

<?php include 'includes/footer.php'; ?>
