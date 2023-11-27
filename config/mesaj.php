
<?php
require_once('PHPMailer-master/src/PHPMailer.php');
require_once('PHPMailer-master/src/SMTP.php');
require_once('PHPMailer-master/src/Exception.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = trim($_POST["name"]);
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  if (empty($name) || empty($email) || empty($message)) {
    echo "Vă rugăm să completați toate câmpurile!";
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Adresa de email nu este validă!";
    exit;
  }

  $to = "contact@venus.ro";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $smtpHost = 'smtp.gmail.com';
  $smtpUsername = 'contact@venus.ro';
  $smtpPassword = 'abcdefg';
  $smtpPort = 587;

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'contact@venus.ro';
  $mail->Password = 'abcdefg';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('vinterandrada08@gmail.com', 'Client');
  $mail->addAddress('contact@venus.ro', 'Restaurant');
  $mail->Subject = 'Test email';
  $mail->Body = 'This is a test email';

  $mail->setFrom($email, $name);
  $mail->addAddress($to);
  $mail->Subject = $subject;
  $mail->Body = $body;

  if (!$mail->send()) {
    echo 'Mesajul nu poate fi trimis.';
} else {
    echo 'Mesajul a fost trimis.';
}
}
?>