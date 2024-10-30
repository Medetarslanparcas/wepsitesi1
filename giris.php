<?php
session_start();
include "dbbaglan.php";

$mesaj = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['sifr'])) {
        $kul = $_POST['email'];
        $sifr = $_POST['sifr'];

        // Kullanıcı bilgilerini kontrol etmek için sorgu hazırlayın
        $stmt = $conn->prepare("SELECT ad , soyad, sifre,email,tel,cinsiyet FROM kullanici WHERE email = ?");
        $stmt->bind_param("s", $kul);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Şifre kontrolü
            if (password_verify($sifr, $row["sifre"])) {
                $_SESSION["email"] = $kul;
                $_SESSION["ad"] = strtoupper( $row["ad"]);
                $_SESSION["soyad"] = strtoupper( $row["soyad"]);
                header("Location:index.php");
                exit(); // Yönlendirme sonrası işlemi sonlandırın
            } else {
                $mesaj = "Şifre Yanlış. Tekrar deneyin.";
            }
        } else {
            $mesaj = "Kullanıcı bulunamadı.";
        }

        $stmt->close();
    }
}

if ($mesaj != '') {
    $_SESSION["mesaj"] = $mesaj; // Hata mesajını oturum değişkenine atayın
    header("Location: login.php"); // Kullanıcıyı giriş sayfasına yönlendirin
    exit();
}

$conn->close();
?>
