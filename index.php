<?php
include('config.php');

// Restoranları çekme
$sql = "SELECT * FROM restaurants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery</title>
</head>
<body>
    <h1>Restoranlar</h1>
    
    <?php
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['name'] . " - " . $row['address'] . " - " . $row['phone'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Henüz restoran eklenmemiş.</p>";
    }
    ?>

    <a href="login.php">Giriş Yap</a> | <a href="register.php">Kayıt Ol</a>
</body>
</html>

<?php
$conn->close();
?>
