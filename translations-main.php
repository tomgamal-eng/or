<?php
// translations.php - Main translation loader
// This file loads all modular translation files

// Detect language from URL parameter or default to German
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'de';
if ($lang !== 'de' && $lang !== 'en') {
    $lang = 'de';
}

// Initialize translations array
$translations = ['de' => [], 'en' => []];

// List of translation modules to load
$translation_files = [
    'common',           // Navigation, footer, buttons
    'homepage',         // Homepage content
    'team',             // Team page + Tom, Aya, Yan personal pages
    'yellow-dragon',    // Yellow Dragon page
    'rent',             // Rent page
    'therapists',       // Therapists page
    'contact',          // Contact page
    'legal'             // Impressum, AGB
];

// Load each translation module
foreach ($translation_files as $file) {
    $filepath = __DIR__ . '/translations/' . $file . '.php';
    
    if (file_exists($filepath)) {
        // Clear previous module variables
        $trans_de = [];
        $trans_en = [];
        
        // Include the module
        include $filepath;
        
        // Merge into main translations array
        $translations['de'] = array_merge($translations['de'], $trans_de);
        $translations['en'] = array_merge($translations['en'], $trans_en);
    }
}

// Helper function to get translated text
function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}

// Helper function to create language switch URL
function langUrl($new_lang) {
    $current_url = $_SERVER['REQUEST_URI'];
    $base_url = strtok($current_url, '?');
    return $base_url . '?lang=' . $new_lang;
}
?>
