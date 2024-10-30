<?php
include "dbbaglan.php";

include 'menu.php';
$mesaj = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen bilgileri al
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $repeatNewPassword = $_POST['repeatNewPassword'];

    // Oturumdan kullanıcı e-postasını al
    $email = $_SESSION["email"];

    // Öğrencinin eski şifresini sorgula
    $stmt = $conn->prepare("SELECT sifre FROM kullanici WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Eğer eski şifre doğruysa
        if (password_verify($oldPassword, $row["sifre"])) {
            // Yeni şifrelerin birbiriyle eşleşip eşleşmediğini kontrol et
            if ($newPassword === $repeatNewPassword) {
                // Yeni şifrenin gerekli kriterleri sağlayıp sağlamadığını kontrol et
                if (preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/', $newPassword)) {
                    // Şifreyi hashle
                    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

                    // Kullanıcının şifresini güncelle
                    $stmt = $conn->prepare("UPDATE kullanici SET sifre = ? WHERE email = ?");
                    $stmt->bind_param("ss", $hashedPassword, $email);
                    if ($stmt->execute()) {
                        $mesaj = "Şifre başarıyla güncellendi.";
                        echo '<meta http-equiv="refresh" content="3;url=index.php">';
                    } else {
                        $mesaj = "Şifre güncellenirken bir hata oluştu.";
                    }
                } else {
                    $mesaj = "Yeni şifre en az 1 harf, en az 1 rakam ve 6-15 karakterden oluşmalıdır.";
                }
            } else {
                $mesaj = "Yeni şifreler eşleşmiyor.";
            }
        } else {
            $mesaj = "Eski şifre yanlış.";
        }
    } else {
        $mesaj = "Kullanıcı bulunamadı.";
    }

    $stmt->close();
    $conn->close();
}
?>

<style>
    .password-change-form {
        width: 350px;
        margin: 30px auto;
        padding: 20px;
        border-radius: 5px;
        background: #f2f2f2;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .password-change-form input[type="password"],
    .password-change-form input[type="submit"] {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 16px;
        box-sizing: border-box;
    }

    .password-change-form input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .password-change-form input[type="submit"]:hover {
        background-color: #248bd0;
    }

    .error {
        color: red;
        font-size: 0.875em;
        margin-top: -15px;
        margin-bottom: 15px;
    }
</style>

<!-- Şifre değiştirme formu -->
<form class="password-change-form" action="sifredegistir.php" method="post">
    <input type="password" name="oldPassword" placeholder="Eski Şifre">
    <div class="error" id="oldPasswordError"></div>

    <input type="password" name="newPassword" placeholder="Yeni Şifre">
    <div class="error" id="newPasswordError"></div>

    <input type="password" name="repeatNewPassword" placeholder="Tekrar Yeni Şifre">
    <div class="error" id="repeatNewPasswordError"></div>

    <input type="submit" value="Gönder" style="background-color: orange;">
</form>

<?php
// Eğer bir mesaj varsa ekrana yazdır
if (!empty($mesaj)) {
    echo '<div class="error">' . $mesaj . '</div>';
}


?>

