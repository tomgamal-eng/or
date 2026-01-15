<?php
// send-application.php - Handle room rental applications

// Get form data
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$website = htmlspecialchars($_POST['website'] ?? '');
$question1 = htmlspecialchars($_POST['question1'] ?? '');
$room = htmlspecialchars($_POST['room'] ?? '');
$model = htmlspecialchars($_POST['model'] ?? '');
$question3 = htmlspecialchars($_POST['question3'] ?? '');
$additional = htmlspecialchars($_POST['additional'] ?? '');

// Translate room selection
$room_text = '';
switch($room) {
    case 'small':
        $room_text = 'Kleiner Raum (6m²) / Small Room (6m²)';
        break;
    case 'large':
        $room_text = 'Großer Raum (30m²) / Large Room (30m²)';
        break;
    case 'both':
        $room_text = 'Beide Räume / Both Rooms';
        break;
}

// Translate model selection
$model_text = '';
switch($model) {
    case 'hourly':
        $model_text = 'Stundenweise (flexibel) / Hourly (flexible)';
        break;
    case 'monthly':
        $model_text = 'Monatspauschale (fester Tag) / Monthly flat rate (fixed day)';
        break;
    case 'not_sure':
        $model_text = 'Noch nicht sicher / Not sure yet';
        break;
}

// Email settings
$to = "tomgamal@gmail.com";
$subject = "Neue Raum-Bewerbung / New Room Application: " . $name;

// NearlyFreeSpeech requires proper From header
// Use your domain email or NFS default
$from_email = "noreply@naturalbalance-embrace.org"; // Change to your domain!
$reply_to = $email; // User's email for reply

// Email body
$message = "
===========================================
NEUE RAUM-BEWERBUNG / NEW ROOM APPLICATION
===========================================

KONTAKTDATEN / CONTACT DETAILS:
--------------------------------
Name: $name
Email: $email
Telefon / Phone: $phone
Website: $website

FRAGE 1 / QUESTION 1: Wer bist du und was bietest du an? / Who are you and what do you offer?
--------------------------------
$question1

FRAGE 2 / QUESTION 2: Welcher Raum & welches Modell? / Which room & which model?
--------------------------------
Raum / Room: $room_text
Modell / Model: $model_text

FRAGE 3 / QUESTION 3: Warum passt du zu uns? / Why do you fit in with us?
--------------------------------
$question3

ZUSÄTZLICHE INFORMATIONEN / ADDITIONAL INFORMATION:
--------------------------------
$additional

===========================================
Gesendet am / Sent on: " . date('d.m.Y H:i:s') . "
===========================================
";

// Email headers - NFS compatible
$headers = "From: " . $from_email . "\r\n";
$headers .= "Reply-To: " . $reply_to . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
$success = mail($to, $subject, $message, $headers);

// Log for debugging (optional - remove after testing)
$log_message = date('Y-m-d H:i:s') . " - Email sent: " . ($success ? "YES" : "NO") . " - From: $name ($email)\n";
@file_put_contents('form_log.txt', $log_message, FILE_APPEND);

// Check if this is an AJAX request
if (isset($_GET['ajax']) && $_GET['ajax'] == '1') {
    // Return JSON response for AJAX
    header('Content-Type: application/json');
    echo json_encode(['success' => $success]);
    exit;
}

// Regular redirect (fallback for non-AJAX)
$lang = $_GET['lang'] ?? 'de';

if ($success) {
    header("Location: rent.php?lang=$lang&success=1");
} else {
    header("Location: rent.php?lang=$lang&error=1");
}

exit;
?>
