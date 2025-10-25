<?php
// Configuration for your email server
$host = 'your_smtp_server';
$port = 587; // Change this to your SMTP port
$username = 'your_email_username';
$password = 'your_email_password';

// Function to generate a random token
function generate_token()
{
    return bin2hex(random_bytes(20));
}

// Function to send an email
function send_email($to, $subject, $message)
{
    global $host, $port, $username, $password;

    $headers = "From: Your Website <noreply@example.com>\r\n";
    $headers .= "Reply-To: noreply@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $transport = (new Swift_SmtpTransport($host, $port))
        ->setUsername($username)
        ->setPassword($password);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message($subject))
        ->setFrom(['noreply@example.com' => 'Your Website'])
        ->setTo($to)
        ->setBody($message, 'text/html');

    $result = $mailer->send($message);
    return $result;
}

// Your database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Generate a unique token
    $token = generate_token();

    // Store token in database
    $sql = "INSERT INTO password_reset_tokens (email, token) VALUES ('$email', '$token')";
    $conn->query($sql);

    // Send email with reset link
    $reset_link = "http://your_website/reset_password.php?token=$token";
    $subject = "Password Reset";
    $message = "Click the following link to reset your password: <a href='$reset_link'>$reset_link</a>";

    if (send_email($email, $subject, $message)) {
        echo "Password reset link has been sent to your email address.";
    } else {
        echo "Failed to send password reset link.";
    }
}

$conn->close();
?>