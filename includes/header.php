<?php
// Language handling
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'de';
if (!in_array($lang, ['de', 'en'])) {
    $lang = 'de';
}

// Translations
$translations = [
    'de' => [
        // Navigation
        'nav_home' => 'Startseite',
        'nav_rent' => 'Raum Mieten',
        'nav_team' => 'Unser Team',
        'nav_therapeuten' => 'Therapeuten',
        'nav_video' => 'Video Production',
        'nav_journey' => 'The Journey',
        'nav_contact' => 'Kontakt',
        'nav_lang_switch' => 'EN',

        // Hero Section
        'hero_title' => 'OR Natural Balance',
        'hero_subtitle' => 'Ein Ort für Heilung, Wachstum und Gemeinschaft',
        'hero_tagline' => 'Willkommen in unserem holistischen Heilzentrum in Berlin',

        // Boxes
        'box1_title' => 'Raum Mieten',
        'box1_text' => 'Mieten Sie unsere professionellen Therapieräume für Ihre Praxis',
        'box1_button' => 'Mehr erfahren',

        'box2_title' => 'Unser Team',
        'box2_text' => 'Lernen Sie das Team hinter OR Natural Balance kennen',
        'box2_button' => 'Team kennenlernen',

        'box3_title' => 'Therapeuten',
        'box3_text' => 'Entdecken Sie unsere qualifizierten Therapeuten und ihre Angebote',
        'box3_button' => 'Therapeuten ansehen',

        'box4_title' => 'Video Production',
        'box4_text' => 'Professionelle Video-Produktion für Ihr Business',
        'box4_button' => 'Mehr erfahren',

        'box5_title' => 'The Journey',
        'box5_text' => 'Erleben Sie The Journey - Eine tiefgreifende Heilmethode',
        'box5_button' => 'Entdecken',

        // CTA
        'cta_text' => 'Bereit, Ihre Reise zu beginnen?',
        'cta_button' => 'Kontaktieren Sie uns',

        // Rent Page
        'rent_hero_title' => 'Räume Mieten',
        'rent_hero_subtitle' => 'Professionelle Therapieräume im Herzen Berlins',
        'rent_intro_text' => 'Willkommen in OR Natural Balance – Ihrem neuen Zuhause für heilende Arbeit in Berlin Prenzlauer Berg.',
        'rent_trust_title' => 'Der Vertrauensvorsprung',
        'rent_trust_text' => 'Wir kennen uns bereits und vertrauen uns. Das gibt uns einen Vorsprung gegenüber anonymen Coworking-Spaces.',
        'rent_rooms_title' => 'Unsere Räume',
        'rent_rooms_intro' => 'Wir bieten zwei professionell ausgestattete Räume für Ihre therapeutische Arbeit:',
        'rent_large_title' => 'Großer Raum',
        'rent_large_size' => '30m²',
        'rent_large_ideal' => 'Ideal für: Gruppenarbeit, Yoga, Tantra, Workshops',
        'rent_large_features' => 'Ausstattung: Großzügiger Raum, natürliches Licht, professionelle Atmosphäre',
        'rent_small_title' => 'Kleiner Raum',
        'rent_small_size' => '6m²',
        'rent_small_ideal' => 'Ideal für: Einzelsitzungen, Massage, Coaching, Therapie',
        'rent_small_features' => 'Ausstattung: Gemütlich, privat, ruhig',

        // Team/Therapeuten
        'therapeuten_hero_title' => 'Unsere Therapeuten',
        'therapeuten_hero_subtitle' => 'Qualifizierte Experten für Ihre Gesundheit und Ihr Wohlbefinden',
        'category_bodywork' => 'Körperarbeit & Massage',
        'category_psychology' => 'Psychologie & Beratung',
        'category_yoga' => 'Yoga & Bewegung',
        'book_appointment' => 'Termin buchen',
        'website' => 'Website',
        'email' => 'E-Mail',
        'learn_more' => 'Mehr erfahren',

        // Practitioners
        'tom_name' => 'Tom Gamal',
        'tom_specialty_therapeuten' => 'Tantra Massage, The Journey',
        'tom_description_therapeuten' => 'Zertifizierter Tantra-Masseur und Journey-Practitioner',

        'aya_name' => 'Aya',
        'aya_specialty_therapeuten' => 'Tantra Massage, Holistische Heilung',
        'aya_description_therapeuten' => 'Expertin für somatische Körperarbeit und energetische Heilung',

        'yan_name' => 'Yan',
        'yan_specialty_therapeuten' => 'Thai Massage, Körperarbeit',
        'yan_description_therapeuten' => 'Traditionelle Thai Massage und therapeutische Körperarbeit',

        'manuela_name' => 'Manuela Spaggiari',
        'manuela_specialty' => 'Craniosacral Therapie',
        'manuela_description' => 'Zertifizierte Craniosacral-Therapeutin',
        'manuela_website' => 'https://www.example.com',
        'manuela_email' => 'manuela@example.com',

        'ana_name' => 'Ana Morin',
        'ana_specialty' => 'Psychotherapie, Coaching',
        'ana_description' => 'Lizenzierte Psychotherapeutin und Life Coach',
        'ana_website' => 'https://www.example.com',
        'ana_email' => 'ana@example.com',

        'francois_name' => 'François de Wet',
        'francois_title' => 'Existential Psychotherapist',
        'francois_specialty' => 'Existentielle Psychotherapie',
        'francois_description' => 'Spezialist für existentielle Fragen und persönliches Wachstum',
        'francois_website' => 'https://www.example.com',

        'claudia_name' => 'Claudia Tiedemann',
        'claudia_specialty' => 'Yoga & Meditation',
        'claudia_description' => 'Erfahrene Yoga-Lehrerin und Meditations-Guide',

        // Contact
        'contact_hero_title' => 'Kontakt',
        'contact_hero_subtitle' => 'Wir freuen uns auf Ihre Nachricht',
        'contact_address_title' => 'Adresse',
        'contact_phone_title' => 'Telefon',
        'contact_email_title' => 'E-Mail',

        // Footer
        'footer_address' => 'Immanuelkirchstraße 22, 10405 Berlin',
        'footer_phone' => 'Tel: 0176-242-242-24',
        'footer_email' => 'natural.balance.berlin@gmail.com',
        'footer_imprint' => 'Impressum',
        'footer_terms' => 'AGB',
        'footer_copyright' => '© 2026 OR Natural Balance. Alle Rechte vorbehalten.',
    ],
    'en' => [
        // Navigation
        'nav_home' => 'Home',
        'nav_rent' => 'Rent Space',
        'nav_team' => 'Our Team',
        'nav_therapeuten' => 'Therapists',
        'nav_video' => 'Video Production',
        'nav_journey' => 'The Journey',
        'nav_contact' => 'Contact',
        'nav_lang_switch' => 'DE',

        // Hero Section
        'hero_title' => 'OR Natural Balance',
        'hero_subtitle' => 'A Place for Healing, Growth, and Community',
        'hero_tagline' => 'Welcome to our holistic healing center in Berlin',

        // Boxes
        'box1_title' => 'Rent Space',
        'box1_text' => 'Rent our professional therapy rooms for your practice',
        'box1_button' => 'Learn More',

        'box2_title' => 'Our Team',
        'box2_text' => 'Meet the team behind OR Natural Balance',
        'box2_button' => 'Meet the Team',

        'box3_title' => 'Therapists',
        'box3_text' => 'Discover our qualified therapists and their offerings',
        'box3_button' => 'View Therapists',

        'box4_title' => 'Video Production',
        'box4_text' => 'Professional video production for your business',
        'box4_button' => 'Learn More',

        'box5_title' => 'The Journey',
        'box5_text' => 'Experience The Journey - A profound healing method',
        'box5_button' => 'Discover',

        // CTA
        'cta_text' => 'Ready to Begin Your Journey?',
        'cta_button' => 'Contact Us',

        // Rent Page
        'rent_hero_title' => 'Rent Space',
        'rent_hero_subtitle' => 'Professional therapy rooms in the heart of Berlin',
        'rent_intro_text' => 'Welcome to OR Natural Balance – your new home for healing work in Berlin Prenzlauer Berg.',
        'rent_trust_title' => 'The Trust Advantage',
        'rent_trust_text' => 'We already know and trust each other. This gives us an advantage over anonymous coworking spaces.',
        'rent_rooms_title' => 'Our Rooms',
        'rent_rooms_intro' => 'We offer two professionally equipped rooms for your therapeutic work:',
        'rent_large_title' => 'Large Room',
        'rent_large_size' => '30m²',
        'rent_large_ideal' => 'Ideal for: Group work, Yoga, Tantra, Workshops',
        'rent_large_features' => 'Features: Spacious room, natural light, professional atmosphere',
        'rent_small_title' => 'Small Room',
        'rent_small_size' => '6m²',
        'rent_small_ideal' => 'Ideal for: Individual sessions, Massage, Coaching, Therapy',
        'rent_small_features' => 'Features: Cozy, private, quiet',

        // Team/Therapeuten
        'therapeuten_hero_title' => 'Our Therapists',
        'therapeuten_hero_subtitle' => 'Qualified experts for your health and well-being',
        'category_bodywork' => 'Bodywork & Massage',
        'category_psychology' => 'Psychology & Counseling',
        'category_yoga' => 'Yoga & Movement',
        'book_appointment' => 'Book Appointment',
        'website' => 'Website',
        'email' => 'Email',
        'learn_more' => 'Learn More',

        // Practitioners
        'tom_name' => 'Tom Gamal',
        'tom_specialty_therapeuten' => 'Tantra Massage, The Journey',
        'tom_description_therapeuten' => 'Certified Tantra massage therapist and Journey practitioner',

        'aya_name' => 'Aya',
        'aya_specialty_therapeuten' => 'Tantra Massage, Holistic Healing',
        'aya_description_therapeuten' => 'Expert in somatic bodywork and energetic healing',

        'yan_name' => 'Yan',
        'yan_specialty_therapeuten' => 'Thai Massage, Bodywork',
        'yan_description_therapeuten' => 'Traditional Thai massage and therapeutic bodywork',

        'manuela_name' => 'Manuela Spaggiari',
        'manuela_specialty' => 'Craniosacral Therapy',
        'manuela_description' => 'Certified Craniosacral Therapist',
        'manuela_website' => 'https://www.example.com',
        'manuela_email' => 'manuela@example.com',

        'ana_name' => 'Ana Morin',
        'ana_specialty' => 'Psychotherapy, Coaching',
        'ana_description' => 'Licensed psychotherapist and life coach',
        'ana_website' => 'https://www.example.com',
        'ana_email' => 'ana@example.com',

        'francois_name' => 'François de Wet',
        'francois_title' => 'Existential Psychotherapist',
        'francois_specialty' => 'Existential Psychotherapy',
        'francois_description' => 'Specialist in existential questions and personal growth',
        'francois_website' => 'https://www.example.com',

        'claudia_name' => 'Claudia Tiedemann',
        'claudia_specialty' => 'Yoga & Meditation',
        'claudia_description' => 'Experienced yoga teacher and meditation guide',

        // Contact
        'contact_hero_title' => 'Contact',
        'contact_hero_subtitle' => 'We look forward to hearing from you',
        'contact_address_title' => 'Address',
        'contact_phone_title' => 'Phone',
        'contact_email_title' => 'Email',

        // Footer
        'footer_address' => 'Immanuelkirchstraße 22, 10405 Berlin',
        'footer_phone' => 'Phone: 0176-242-242-24',
        'footer_email' => 'natural.balance.berlin@gmail.com',
        'footer_imprint' => 'Imprint',
        'footer_terms' => 'Terms',
        'footer_copyright' => '© 2026 OR Natural Balance. All rights reserved.',
    ]
];

// Translation function
function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OR Natural Balance - <?php echo t('hero_subtitle'); ?></title>
    <meta name="description" content="<?php echo t('hero_tagline'); ?>">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
