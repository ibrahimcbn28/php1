<?php
$servername = "localhost";
$username = "root"; // XAMPP'de genelde root kullanılır
$password = ""; // Eğer bir şifreniz yoksa boş bırakın
$dbname = "food_delivery";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
