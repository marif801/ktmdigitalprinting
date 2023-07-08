<?php
// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Proses pengiriman email
$to = 'digitalprintingktm@example.com'; // Ganti dengan alamat email Anda
$subject = 'New Contact Form Submission';
$body = "Name: $name\nEmail: $email\n\n$message";

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if (mail($to, $subject, $body, $headers)) {
    // Jika pengiriman berhasil
    echo 'success';
} else {
    // Jika pengiriman gagal
    echo 'error';
}
