<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="therapeuten-hero">
    <h1><?php echo t('therapeuten_hero_title'); ?></h1>
    <p><?php echo t('therapeuten_hero_subtitle'); ?></p>
</section>

<!-- Category Navigation -->
<div class="category-nav">
    <a href="#bodywork" class="category-nav-link">
        🌿 <?php echo t('category_bodywork'); ?>
    </a>
    <a href="#psychology" class="category-nav-link">
        🧠 <?php echo t('category_psychology'); ?>
    </a>
    <a href="#yoga" class="category-nav-link">
        🧘‍♀️ <?php echo t('category_yoga'); ?>
    </a>
</div>

<!-- Main Content -->
<div class="therapeuten-content">
    
    <div class="categories-grid">
        
        <!-- Body Work & Massage Column -->
        <div class="category-column" id="bodywork">
            <h2 class="category-column-title"><?php echo t('category_bodywork'); ?></h2>
            
            <!-- Tom Gamal -->
            <div class="practitioner-card">
                <div class="practitioner-image">🐉</div>
                <h3><?php echo t('tom_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('tom_specialty_therapeuten'); ?></p>
                <p class="practitioner-description"><?php echo t('tom_description_therapeuten'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="https://tommassage.de/booking/" target="_blank">
                        📅 <?php echo t('book_appointment'); ?>
                    </a>
                </div>
                
                <a href="tom.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
            
            <!-- Aya -->
            <div class="practitioner-card">
                <div class="practitioner-image">🌸</div>
                <h3><?php echo t('aya_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('aya_specialty_therapeuten'); ?></p>
                <p class="practitioner-description"><?php echo t('aya_description_therapeuten'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="https://tommassage.de/booking/" target="_blank">
                        📅 <?php echo t('book_appointment'); ?>
                    </a>
                    <a href="https://ayamo.life" target="_blank">
                        🌐 <?php echo t('website'); ?>
                    </a>
                </div>
                
                <a href="aya.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
            
            <!-- Yan -->
            <div class="practitioner-card">
                <div class="practitioner-image">🌿</div>
                <h3><?php echo t('yan_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('yan_specialty_therapeuten'); ?></p>
                <p class="practitioner-description"><?php echo t('yan_description_therapeuten'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="https://tommassage.de/booking/" target="_blank">
                        📅 <?php echo t('book_appointment'); ?>
                    </a>
                </div>
                
                <a href="yan.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
            
            <!-- Manuela Spaggiari -->
            <div class="practitioner-card">
                <div class="practitioner-image">🌿</div>
                <h3><?php echo t('manuela_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('manuela_specialty'); ?></p>
                <p class="practitioner-description"><?php echo t('manuela_description'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="<?php echo t('manuela_website'); ?>" target="_blank">
                        🌐 <?php echo t('website'); ?>
                    </a>
                    <a href="mailto:<?php echo t('manuela_email'); ?>">
                        ✉️ <?php echo t('email'); ?>
                    </a>
                </div>
                
                <a href="manuela.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
        </div>
        
        <!-- Psychology & Counseling Column -->
        <div class="category-column" id="psychology">
            <h2 class="category-column-title"><?php echo t('category_psychology'); ?></h2>
            
            <div class="practitioner-card">
                <div class="practitioner-image">🧠</div>
                <h3><?php echo t('ana_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('ana_specialty'); ?></p>
                <p class="practitioner-description"><?php echo t('ana_description'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="<?php echo t('ana_website'); ?>" target="_blank">
                        🌐 <?php echo t('website'); ?>
                    </a>
                    <a href="mailto:<?php echo t('ana_email'); ?>">
                        ✉️ <?php echo t('email'); ?>
                    </a>
                </div>
                
                <a href="ana-morin.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
            
            <div class="practitioner-card">
                <div class="practitioner-image">🧘</div>
                <h3><?php echo t('francois_name'); ?></h3>
                <p class="practitioner-title"><?php echo t('francois_title'); ?></p>
                <p class="practitioner-specialty"><?php echo t('francois_specialty'); ?></p>
                <p class="practitioner-description"><?php echo t('francois_description'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="<?php echo t('francois_website'); ?>" target="_blank">
                        🌐 <?php echo t('website'); ?>
                    </a>
                </div>
                
                <a href="francois-de-wet.php?lang=<?php echo $lang; ?>" class="practitioner-button">
                    <?php echo t('learn_more'); ?>
                </a>
            </div>
        </div>
        
        <!-- Yoga Column -->
        <div class="category-column" id="yoga">
            <h2 class="category-column-title"><?php echo t('category_yoga'); ?></h2>
            
            <div class="practitioner-card">
                <div class="practitioner-image">🧘‍♀️</div>
                <h3><?php echo t('claudia_name'); ?></h3>
                <p class="practitioner-specialty"><?php echo t('claudia_specialty'); ?></p>
                <p class="practitioner-description"><?php echo t('claudia_description'); ?></p>
                
                <div class="practitioner-contact">
                    <a href="tel:017218020054">
                        📞 0172 180 20 54
                    </a>
                    <a href="mailto:claudia.tiedemann@hotmail.de">
                        ✉️ <?php echo t('email'); ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

<?php include 'includes/footer.php'; ?>
