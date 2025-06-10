<?php

function generateVerificationCode() {
    return str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
}

function registerEmail($email) {
    $file = __DIR__ . '/registered_emails.txt';
    $emails = file($file, FILE_IGNORE_NEW_LINES);
    if (!in_array($email, $emails)) {
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
    }
}

function unsubscribeEmail($email) {
    $file = __DIR__ . '/registered_emails.txt';
    $emails = file($file, FILE_IGNORE_NEW_LINES);
    $updated = array_filter($emails, fn($e) => trim($e) !== trim($email));
    file_put_contents($file, implode(PHP_EOL, $updated) . PHP_EOL);
}

function sendVerificationEmail($email, $code) {
    $log = "To: $email\nVerification Code: $code\nTime: " . date("Y-m-d H:i:s") . "\n\n";
    file_put_contents(__DIR__ . '/email_log.txt', $log, FILE_APPEND);
    echo "<p style='color: green;'>[TEST MODE] Verification code logged to email_log.txt</p>";
}

function fetchGitHubTimeline() {
    return file_get_contents("https://www.github.com/timeline");
}

function formatGitHubData($data) {
    // Placeholder formatting
    return "<h2>GitHub Timeline Updates</h2>
            <table border='1'>
                <tr><th>Event</th><th>User</th></tr>
                <tr><td>Push</td><td>testuser</td></tr>
            </table>";
}

function sendGitHubUpdatesToSubscribers() {
    $file = __DIR__ . '/registered_emails.txt';
    $emails = file($file, FILE_IGNORE_NEW_LINES);
    $data = fetchGitHubTimeline();
    $html = formatGitHubData($data);
    $subject = "Latest GitHub Updates";
    $unsubscribe_link = "http://localhost/gh-timeline/src/unsubscribe.php";

    foreach ($emails as $email) {
        $message = $html . "<p><a href=\"$unsubscribe_link\" id=\"unsubscribe-button\">Unsubscribe</a></p>";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: no-reply@example.com\r\n";
        mail($email, $subject, $message, $headers);
    }
}
