<?php
session_start();
include 'dbbaglan.php';


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email'])) {
    header("Location: giris.php");
    exit();
}

$email = $_SESSION['email'];
$toplam_fiyat = isset($_POST['toplam_fiyat']) ? $_POST['toplam_fiyat'] : 0;

$error_message = "";

// Ensure form data is submitted before processing
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['odemeyi_tamamla'])) {
    $kart_numarasi = isset($_POST['kart_numarasi']) ? $_POST['kart_numarasi'] : null;
    $son_kullanma = isset($_POST['son_kullanma']) ? $_POST['son_kullanma'] : null;
    $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : null;
    $sehir = isset($_POST['sehir']) ? $_POST['sehir'] : null;
    $ilce = isset($_POST['ilce']) ? $_POST['ilce'] : null;
    $adres = isset($_POST['adres']) ? $_POST['adres'] : null;
    $posta_kodu = isset($_POST['posta_kodu']) ? $_POST['posta_kodu'] : null;

    // Validate the inputs
    if ($kart_numarasi && preg_match("/^[0-9]{16}$/", $kart_numarasi)) {
        if ($son_kullanma && preg_match("/^(0[1-9]|1[0-2])\/\d{2}$/", $son_kullanma)) {
            if ($cvv && preg_match("/^[0-9]{3}$/", $cvv)) {
                if ($sehir && $ilce && $adres && $posta_kodu && preg_match("/^[0-9]{5}$/", $posta_kodu)) {
                    // Ödeme başarılı
                    echo "Ödeme başarıyla tamamlandı.";

                    // Clear the cart
                    $sql_user = "SELECT kullanici_id FROM kullanici WHERE email = ?";
                    $stmt = $conn->prepare($sql_user);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result_user = $stmt->get_result();

                    if ($result_user->num_rows > 0) {
                        $row = $result_user->fetch_assoc();
                        $kullanici_id = $row['kullanici_id'];
                        $sql_temizle = "DELETE FROM sepet WHERE kullanici_id = ?";
                        $stmt_temizle = $conn->prepare($sql_temizle);
                        $stmt_temizle->bind_param("i", $kullanici_id);
                        if ($stmt_temizle->execute() === TRUE) {
                            // Redirect to index.php after 2 seconds
                            echo "<meta http-equiv='refresh' content='2;url=index.php'>";
                            exit();
                        } else {
                            echo "Sepeti temizlemede bir hata oluştu.";
                        }
                    } else {
                        echo "Kullanıcı bulunamadı.";
                    }
                } else {
                    $error_message = "Adres bilgilerini eksiksiz ve doğru girin.";
                }
            } else {
                $error_message = "CVV hatalı, lütfen doğru bir CVV girin.";
            }
        } else {
            $error_message = "Son kullanma tarihi formatı hatalı, lütfen MM/YY formatında girin.";
        }
    } else {
        $error_message = "Kart numarası hatalı, lütfen 16 rakam girin.";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödeme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
           
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #ff0000;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ödeme Bilgileri</h2>
        <?php if (!empty($error_message)) : ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form method="post" action="odeme.php">
            <input type="hidden" name="toplam_fiyat" value="<?php echo htmlspecialchars($toplam_fiyat); ?>">
            <h3>Adres Bilgileri</h3>
            <select name="sehir" required>
              <option value="">Şehir Seçin</option>
              <option value="Adana">Adana</option>
              <option value="Adıyaman">Adıyaman</option>
              <option value="Afyonkarahisar">Afyonkarahisar</option>
              <option value="Ağrı">Ağrı</option>
              <option value="Amasya">Amasya</option>
              <option value="Ankara">Ankara</option>
              <option value="Antalya">Antalya</option>
              <option value="Artvin">Artvin</option>
              <option value="Aydın">Aydın</option>
              <option value="Balıkesir">Balıkesir</option>
              <option value="Bilecik">Bilecik</option>
              <option value="Bingöl">Bingöl</option>
              <option value="Bitlis">Bitlis</option>
              <option value="Bolu">Bolu</option>
              <option value="Burdur">Burdur</option>
              <option value="Bursa">Bursa</option>
              <option value="Çanakkale">Çanakkale</option>
              <option value="Çankırı">Çankırı</option>
              <option value="Çorum">Çorum</option>
              <option value="Denizli">Denizli</option>
              <option value="Diyarbakır">Diyarbakır</option>
              <option value="Edirne">Edirne</option>
              <option value="Elazığ">Elazığ</option>
              <option value="Erzincan">Erzincan</option>
              <option value="Erzurum">Erzurum</option>
              <option value="Eskişehir">Eskişehir</option>
              <option value="Gaziantep">Gaziantep</option>
              <option value="Giresun">Giresun</option>
              <option value="Gümüşhane">Gümüşhane</option>
              <option value="Hakkari">Hakkari</option>
              <option value="Hatay">Hatay</option>
              <option value="Isparta">Isparta</option>
              <option value="Mersin">Mersin</option>
              <option value="İstanbul">İstanbul</option>
              <option value="İzmir">İzmir</option>
              <option value="Kars">Kars</option>
              <option value="Kastamonu">Kastamonu</option>
              <option value="Kayseri">Kayseri</option>
              <option value="Kırklareli">Kırklareli</option>
              <option value="Kırşehir">Kırşehir</option>
              <option value="Kocaeli">Kocaeli</option>
              <option value="Konya">Konya</option>
              <option value="Kütahya">Kütahya</option>
              <option value="Malatya">Malatya</option>
              <option value="Manisa">Manisa</option>
              <option value="Kahramanmaraş">Kahramanmaraş</option>
              <option value="Mardin">Mardin</option>
              <option value="Muğla">Muğla</option>
              <option value="Muş">Muş</option>
              <option value="Nevşehir">Nevşehir</option>
              <option value="Niğde">Niğde</option>
              <option value="Ordu">Ordu</option>
              <option value="Rize">Rize</option>
              <option value="Sakarya">Sakarya</option>
              <option value="Samsun">Samsun</option>
              <option value="Siirt">Siirt</option>
              <option value="Sinop">Sinop</option>
              <option value="Sivas">Sivas</option>
              <option value="Tekirdağ">Tekirdağ</option>
              <option value="Tokat">Tokat</option>
              <option value="Trabzon">Trabzon</option>
              <option value="Tunceli">Tunceli</option>
              <option value="Şanlıurfa">Şanlıurfa</option>
              <option value="Uşak">Uşak</option>
              <option value="Van">Van</option>
              <option value="Yozgat">Yozgat</option>
              <option value="Zonguldak">Zonguldak</option>
              <option value="Aksaray">Aksaray</option>
              <option value="Bayburt">Bayburt</option>
              <option value="Karaman">Karaman</option>
              <option value="Kırıkkale">Kırıkkale</option>
              <option value="Batman">Batman</option>
              <option value="Şırnak">Şırnak</option>
              <option value="Bartın">Bartın</option>
              <option value="Ardahan">Ardahan</option>
              <option value="Iğdır">Iğdır</option>
              <option value="Yalova">Yalova</option>
              <option value="Karabük">Karabük</option>
              <option value="Kilis">Kilis</option>
              <option value="Osmaniye">Osmaniye</option>
              <option value="Düzce">Düzce</option>
          </select>
            <input type="text" name="ilce" placeholder="İlçe" required>
            <input type="text" name="adres" placeholder="Adres" required>
            <input type="text" name="posta_kodu" placeholder="Posta Kodu (5 rakam)" pattern="[0-9]{5}" required>

            <br><br>

            <h3>Kart Bilgileri</h3>
            <input type="text" name="kart_numarasi" placeholder="Kart Numarası (16 rakam)" pattern="[0-9]{16}" required>
            <input type="text" name="son_kullanma" placeholder="Son Kullanma Tarihi (MM/YY)" pattern="^(0[1-9]|1[0-2])\/\d{2}$" required>
            <input type="text" name="cvv" placeholder="CVV (3 rakam)" pattern="[0-9]{3}" required>
            <button type="submit" name="odemeyi_tamamla">Ödemeyi Tamamla</button>
        </form>
    </div>
</body>
</html>
