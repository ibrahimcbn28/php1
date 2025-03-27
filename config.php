<?php
// Veritabanı Bağlantısı için Gereken Bilgiler
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');  // XAMPP için genellikle 'root' kullanılır
define('DB_PASSWORD', '');  // Eğer şifre boşsa, boş bırakabilirsin
define('DB_NAME', 'food_delivery');  // Veritabanı ismi

// Veritabanı bağlantısını oluşturma
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
