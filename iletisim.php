<?php
// dbbagla.php dosyasını dahil edin
include "dbbagla.php";

// Veritabanı bağlantısının başarılı bir şekilde kurulduğunu doğrulama
if (!$conn) {
    die("Veritabanı bağlantısında bir hata oluştu: " . mysqli_connect_error());
} else {
    echo "Veritabanı bağlantısı başarılı bir şekilde kuruldu.<br>";
}

// İletişim bilgilerini göstermek için giriş yapmış bir kullanıcı olup olmadığını kontrol etme
session_start();
if (isset($_SESSION["email"])) {
    // Kullanıcının oturum bilgilerini al
    $email = $_SESSION["email"];
    echo "Email: " . $email . "<br>";

    // Kullanıcının bilgilerini veritabanından sorgula
    $sql = "SELECT * FROM kullanici WHERE email = '$email'";
    $result = $conn->query($sql);

    // Sorgunun doğru bir şekilde çalıştığını ve sonuçların beklenen sonuçları döndürdüğünü kontrol etme
    if ($result) {
        if ($result->num_rows > 0) {
            // Kullanıcı bilgilerini ekrana yazdır
            $row = $result->fetch_assoc();
            echo "Adı: " . $row["ad"] . "<br>";
            echo "Soyadı: " . $row["soyad"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Telefon: " . $row["tel"] . "<br>";
        } else {
            echo "Kullanıcı bulunamadı.<br>";
        }
    } else {
        echo "Veritabanı sorgusunda bir hata oluştu: " . $conn->error . "<br>";
    }
} else {
    // Kullanıcı giriş yapmamışsa, uygun bir mesaj göster veya yönlendir
    echo "Lütfen önce giriş yapın.<br>";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
