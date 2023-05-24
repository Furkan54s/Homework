<?php
// Veritabanı bağlantısı için gerekli bilgiler
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kayit";

// POST verilerini al
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Veritabanı bağlantısını oluştur
$connect =new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

// Veriyi veritabanına ekle
$sql = "INSERT INTO ogrenciler (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi.";
} else {
    echo "Kayıt eklenirken hata oluştu: " . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>