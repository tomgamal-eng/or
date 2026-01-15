<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Hero Section -->
<section class="rent-hero">
    <div class="rent-hero-content">
        <h1><?php echo t('rent_hero_title'); ?></h1>
        <p class="rent-hero-subtitle"><?php echo t('rent_hero_subtitle'); ?></p>
        
        <!-- Video -->
        <div class="rent-hero-video">
            <video autoplay muted loop playsinline>
                <source src="assets/videos/sbkg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="rent-intro">
    <div class="section-content">
        <p><?php echo t('rent_intro_text'); ?></p>
    </div>
</section>

<!-- Trust Advantage -->
<section class="rent-trust">
    <div class="section-content">
        <h2><?php echo t('rent_trust_title'); ?></h2>
        <p><?php echo t('rent_trust_text'); ?></p>
    </div>
</section>

<!-- Our Rooms -->
<section class="rent-rooms">
    <div class="section-content">
        <h2><?php echo t('rent_rooms_title'); ?></h2>
        <p class="rooms-intro"><?php echo t('rent_rooms_intro'); ?></p>
        
        <div class="rooms-grid">
            
            <!-- Large Room -->
            <div class="room-card">
                <div class="room-icon">🏠</div>
                <h3><?php echo t('rent_large_title'); ?></h3>
                <p class="room-size"><?php echo t('rent_large_size'); ?></p>
                <p class="room-ideal"><?php echo t('rent_large_ideal'); ?></p>
                <p class="room-features"><?php echo t('rent_large_features'); ?></p>
            </div>
            
            <!-- Small Room -->
            <div class="room-card">
                <div class="room-icon">🛋️</div>
                <h3><?php echo t('rent_small_title'); ?></h3>
                <p class="room-size"><?php echo t('rent_small_size'); ?></p>
                <p class="room-ideal"><?php echo t('rent_small_ideal'); ?></p>
                <p class="room-features"><?php echo t('rent_small_features'); ?></p>
            </div>
            
        </div>
    </div>
</section>

<!-- Pricing Models -->
<section class="rent-pricing">
    <div class="section-content">
        <h2><?php echo t('rent_pricing_title'); ?></h2>
        
        <div class="pricing-options">
            
            <!-- Option A: Flexible -->
            <div class="pricing-card">
                <h3><?php echo t('rent_option_a_title'); ?></h3>
                <p class="pricing-subtitle"><?php echo t('rent_option_a_subtitle'); ?></p>
                <div class="pricing-details">
                    <p><strong><?php echo t('rent_small_room'); ?>:</strong> <?php echo t('rent_small_hourly'); ?></p>
                    <p><strong><?php echo t('rent_large_room'); ?>:</strong> <?php echo t('rent_large_hourly'); ?></p>
                </div>
            </div>
            
            <!-- Option B: Monthly Flat Rate -->
            <div class="pricing-card pricing-featured">
                <h3><?php echo t('rent_option_b_title'); ?></h3>
                <p class="pricing-subtitle"><?php echo t('rent_option_b_subtitle'); ?></p>
                <p class="pricing-note"><?php echo t('rent_option_b_note'); ?></p>
                
                <div class="pricing-table">
                    <h4><?php echo t('rent_small_room'); ?>:</h4>
                    <ul>
                        <li><?php echo t('rent_small_morning'); ?></li>
                        <li><?php echo t('rent_small_evening'); ?></li>
                    </ul>
                    
                    <h4><?php echo t('rent_large_room'); ?>:</h4>
                    <ul>
                        <li><?php echo t('rent_large_morning'); ?></li>
                        <li><?php echo t('rent_large_evening'); ?></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Business Booster -->
<section class="rent-booster">
    <div class="section-content">
        <h2><?php echo t('rent_booster_title'); ?></h2>
        <p class="booster-intro"><?php echo t('rent_booster_intro'); ?></p>
        
        <div class="booster-content">
            <h3><?php echo t('rent_booster_video_title'); ?></h3>
            <p><?php echo t('rent_booster_video_text'); ?></p>
            
            <h4><?php echo t('rent_booster_reach_title'); ?></h4>
            <ul class="booster-list">
                <li><?php echo t('rent_booster_reach_1'); ?></li>
                <li><?php echo t('rent_booster_reach_2'); ?></li>
                <li><?php echo t('rent_booster_reach_3'); ?></li>
            </ul>
            
            <div class="booster-extras">
                <p><strong><?php echo t('rent_booster_automation'); ?></strong></p>
                <p><strong><?php echo t('rent_booster_loyalty'); ?></strong></p>
            </div>
            
            <a href="video-production.php?lang=<?php echo $lang; ?>" class="booster-link">
                <?php echo t('rent_booster_learn_more'); ?> →
            </a>
        </div>
    </div>
</section>

<!-- Application Section with Form -->
<section class="rent-application">
    <div class="section-content">
        <h2><?php echo t('rent_application_title'); ?></h2>
        <p><?php echo t('rent_application_intro'); ?></p>
        
        <!-- Success/Error Message Area -->
        <div id="form-message-container"></div>
        
        <!-- Application Form -->
        <form class="rent-application-form" id="applicationForm" method="POST">
            
            <!-- Personal Info -->
            <div class="form-row">
                <div class="form-group">
                    <label for="name"><?php echo t('form_name'); ?> *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email"><?php echo t('form_email'); ?> *</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="phone"><?php echo t('form_phone'); ?></label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="website"><?php echo t('form_website'); ?></label>
                    <input type="url" id="website" name="website" placeholder="https://">
                </div>
            </div>
            
            <!-- Application Questions -->
            <div class="form-group">
                <label for="question1"><?php echo t('rent_application_q1'); ?> *</label>
                <textarea id="question1" name="question1" rows="4" required placeholder="<?php echo t('form_q1_placeholder'); ?>"></textarea>
            </div>
            
            <div class="form-group">
                <label for="question2"><?php echo t('rent_application_q2'); ?> *</label>
                <div class="form-checkboxes">
                    <div class="checkbox-group">
                        <strong><?php echo t('form_room_label'); ?>:</strong>
                        <label class="checkbox-label">
                            <input type="radio" name="room" value="small" required>
                            <?php echo t('rent_small_room'); ?> (6m²)
                        </label>
                        <label class="checkbox-label">
                            <input type="radio" name="room" value="large" required>
                            <?php echo t('rent_large_room'); ?> (30m²)
                        </label>
                        <label class="checkbox-label">
                            <input type="radio" name="room" value="both" required>
                            <?php echo t('form_both_rooms'); ?>
                        </label>
                    </div>
                    
                    <div class="checkbox-group">
                        <strong><?php echo t('form_model_label'); ?>:</strong>
                        <label class="checkbox-label">
                            <input type="radio" name="model" value="hourly" required>
                            <?php echo t('form_model_hourly'); ?>
                        </label>
                        <label class="checkbox-label">
                            <input type="radio" name="model" value="monthly" required>
                            <?php echo t('form_model_monthly'); ?>
                        </label>
                        <label class="checkbox-label">
                            <input type="radio" name="model" value="not_sure" required>
                            <?php echo t('form_model_notsure'); ?>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="question3"><?php echo t('rent_application_q3'); ?> *</label>
                <textarea id="question3" name="question3" rows="5" required placeholder="<?php echo t('form_q3_placeholder'); ?>"></textarea>
            </div>
            
            <!-- Additional Notes -->
            <div class="form-group">
                <label for="additional"><?php echo t('form_additional'); ?></label>
                <textarea id="additional" name="additional" rows="3" placeholder="<?php echo t('form_additional_placeholder'); ?>"></textarea>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="rent-cta-button" id="submitButton">
                <?php echo t('rent_application_button'); ?>
            </button>
            
        </form>
        
        <script>
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault(); // מונע reload
            
            const form = this;
            const submitButton = document.getElementById('submitButton');
            const messageContainer = document.getElementById('form-message-container');
            
            // Disable button
            submitButton.disabled = true;
            submitButton.textContent = '<?php echo $lang === 'de' ? 'Wird gesendet...' : 'Sending...'; ?>';
            
            // Collect form data
            const formData = new FormData(form);
            
            // Send AJAX request
            fetch('send-application.php?ajax=1&lang=<?php echo $lang; ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Show message
                if (data.success) {
                    messageContainer.innerHTML = `
                        <div class="form-message form-success">
                            <div class="message-icon">✓</div>
                            <strong><?php echo t('form_success_title'); ?></strong><br>
                            <?php echo t('form_success_message'); ?>
                        </div>
                    `;
                    form.reset(); // נקה את הטופס
                } else {
                    messageContainer.innerHTML = `
                        <div class="form-message form-error">
                            <div class="message-icon">✗</div>
                            <strong><?php echo t('form_error_title'); ?></strong><br>
                            <?php echo t('form_error_message'); ?>
                        </div>
                    `;
                }
                
                // Scroll to message
                messageContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Re-enable button
                submitButton.disabled = false;
                submitButton.textContent = '<?php echo t('rent_application_button'); ?>';
            })
            .catch(error => {
                messageContainer.innerHTML = `
                    <div class="form-message form-error">
                        <div class="message-icon">✗</div>
                        <strong><?php echo t('form_error_title'); ?></strong><br>
                        <?php echo t('form_error_message'); ?>
                    </div>
                `;
                submitButton.disabled = false;
                submitButton.textContent = '<?php echo t('rent_application_button'); ?>';
            });
        });
        </script>
        
        <p class="application-note"><?php echo t('rent_application_note'); ?></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
