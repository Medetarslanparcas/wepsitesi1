<?php
session_start();
include "dbbaglan.php";

$mesaj = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ad']) && isset($_POST['soyad']) && isset($_POST['sifre']) && isset($_POST['email']) && isset($_POST['tel'])&& isset($_POST['cinsiyet'])) {
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $sifre = $_POST['sifre'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $cinsiyet = $_POST['cinsiyet'];
        // Şifreyi hashleyin
        $hashed_sifre = password_hash($sifre, PASSWORD_BCRYPT);

        // Veritabanına kullanıcı ekleme sorgusunu hazırlayın
        $stmt = $conn->prepare("INSERT INTO kullanici (ad, soyad, sifre, email, tel, cinsiyet) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ad, $soyad, $hashed_sifre, $email, $tel, $cinsiyet);

        // Sorguyu çalıştırın
        if ($stmt->execute()) {
   $mesaj='Kullanıcı başarıyla kaydedildi';
            echo '<meta http-equiv="refresh" content="3;url=index.php">';
        } else {
            $mesaj = "Kullanıcı kaydedilirken bir hata oluştu.";
        }

        $stmt->close();
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        form input[type="text"],
        form input[type="password"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="cinsiyet"]
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 0.875em;
            margin-top: -15px;
            margin-bottom: 15px;
        }
        .cinsiyet-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .cinsiyet-container input[type="radio"] {
            display: none; /* Radyo düğmelerini gizle */
        }

        .cinsiyet-container label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        /* Radyo düğmesinin yanında simge oluştur */
        .cinsiyet-container label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 1px;
            width: 16px;
            height: 16px;
            border: 1px solid #aaa;
            border-radius: 50%;
            background-color: #fff;
        }

        /* Seçili radyo düğmesinin simgesini göster */
        .cinsiyet-container input[type="radio"]:checked + label:before {
            background-color: #4CAF50;
        }

        /* Radyo düğmesinin içinde seçili durumu gizle */
        .cinsiyet-container input[type="radio"]:checked + label:after {
            content: '\2713'; /* Unicode tik simgesi */
            font-size: 14px;
            color: #fff;
            position: absolute;
            top: -1px;
            left: 4px;
        }
    </style>
</head>
<body>
    <h2 style="position:relative;bottom:350px; left:200px; color:orange;">Kayıt Ol</h2>
    <?php
    // Eğer bir mesaj varsa ekrana yazdır
    if ($mesaj != '') {
        echo '<p style="position:relative; top:420px; left:200px;" >'. $mesaj .'</p>';
    }
    ?>
    <form id="kayitFormu" action="kayit.php" method="post">
        <label for="ad">Ad:</label>
        <input type="text" id="ad" name="ad" required>
        <div class="error" id="adError"></div>
        
        <label for="soyad">Soyad:</label>
        <input type="text" id="soyad" name="soyad" required>
        <div class="error" id="soyadError"></div>
        
        <label for="sifre">Şifre:</label>
        <input type="password" id="sifre" name="sifre" required>
        <div class="error" id="sifreError"></div>
        <div class="kriter" id="kriterText">Şifreniz en az 1 harf, en az 1 rakam ve 6-15 karakter olmalıdır.</div>
        
        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required>
        <div class="error" id="emailError"></div>
        
        <label for="tel">Telefon:</label>
        <input type="text" id="tel" name="tel" pattern="[0-9]{11}" required>
        <div class="error" id="telError"></div>
        
        <label for="cinsiyet">Cinsiyet(isteğe bağlı):</label>
        <div class="cinsiyet-container">
            <input type="radio" id="erkek" name="cinsiyet" value="erkek" required>
            <label for="erkek">Erkek</label>
            <input type="radio" id="kadin" name="cinsiyet" value="kadin" required>
            <label for="kadin">Kadın</label>
        </div>

        <label>
            <input type="checkbox" id="kosullar" name="kosullar" required>
            Tüm şartları okudum, kabul ediyorum
        </label>
        <div class="error" id="kosullarError"></div>
        
        <input type="submit" value="Kaydet" style="background-color:orange;">
    </form>

    <script>
        document.getElementById('kayitFormu').addEventListener('submit', function(event) {
            // Clear previous error messages
            document.querySelectorAll('.error').forEach(function(el) {
                el.textContent = '';
            });

            // Check required fields
            let isValid = true;

            if (!document.getElementById('ad').value.trim()) {
                document.getElementById('adError').textContent = 'Ad alanı zorunludur.';
                isValid = false;
                document.getElementById('ad').focus();
            }
            if (!document.getElementById('soyad').value.trim()) {
                document.getElementById('soyadError').textContent = 'Soyad alanı zorunludur.';
                isValid = false;
                document.getElementById('soyad').focus();
            }
            if (!document.getElementById('sifre').value.trim()) {
                document.getElementById('sifreError').textContent = 'Şifre alanı zorunludur.';
                isValid = false;
                document.getElementById('sifre').focus();
            } else {
                var sifre = document.getElementById('sifre').value.trim();
                var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/;
                if (!regex.test(sifre)) {
                    document.getElementById('sifreError').textContent = 'Şifreniz en az 1 harf, en az 1 rakam ve 6-15 karakter olmalıdır.';
                    isValid = false;
                }
            }
            if (!document.getElementById('email').value.trim()) {
                document.getElementById('emailError').textContent = 'E-posta alanı zorunludur.';
                isValid = false;
                document.getElementById('email').focus();
            }
            var tel = document.getElementById('tel').value.trim();
            var telRegex = /^\d{11}$/;
            if (!tel) {
                document.getElementById('telError').textContent = 'Telefon alanı zorunludur.';
                isValid = false;
            } else if (!tel.match(telRegex)) {
                document.getElementById('telError').textContent = 'Telefon numarası 11 rakamdan oluşmalıdır.';
                isValid = false;
            }
           
            if (!document.getElementById('kosullar').checked) {
                document.getElementById('kosullarError').textContent = 'Şartları kabul etmelisiniz.';
                isValid = false;
                document.getElementById('kosullar').focus();
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        document.getElementById('tel').addEventListener('input', function() {
            var tel = this.value.trim();
            var telError = document.getElementById('telError');
            var telRegex = /^\d{11}$/;

            if (!tel.match(telRegex)) {
                telError.textContent = 'Telefon numarası 11 rakamdan oluşmalıdır.';
            } else {
                telError.textContent = '';
            }
        });
    </script>
</body>
</html>
