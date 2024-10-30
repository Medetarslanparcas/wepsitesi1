<?php
include "MENU2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }


        h2 {
            margin-top: 0;
        }

        .product {
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form {
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
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

        .form-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container"></div>
<?php


if (!isset($_SESSION['email'])) {
    header("Location: giris.php");
    exit();
}

$email = $_SESSION['email'];

$sql_user = "SELECT kullanici_id FROM kullanici WHERE email = ?";
$stmt = $conn->prepare($sql_user);
$stmt->bind_param("s", $email);
$stmt->execute();
$result_user = $stmt->get_result();

if ($result_user->num_rows > 0) {
    $row = $result_user->fetch_assoc();
    $kullanici_id = $row['kullanici_id'];

    $sql_sepet = "SELECT  urun_id FROM sepet WHERE kullanici_id = ?";
    $stmt = $conn->prepare($sql_sepet);
    $stmt->bind_param("i", $kullanici_id);
    $stmt->execute();
    $result_sepet = $stmt->get_result();

    if ($result_sepet->num_rows > 0) {
        echo "<h2>Sepetiniz</h2>";
        
        // Toplam fiyat değişkeni
        $toplam_fiyat = 0;

        while ($sepet_row = $result_sepet->fetch_assoc()) {
            $urun_id = $sepet_row['urun_id'];

            $sql_urun = "SELECT * FROM urunler WHERE urunId = ?";
            $stmt_urun = $conn->prepare($sql_urun);
            $stmt_urun->bind_param("i", $urun_id);
            $stmt_urun->execute();
            $result_urun = $stmt_urun->get_result();

            if ($result_urun->num_rows > 0) {
                $urun = $result_urun->fetch_assoc();
                $ad = $urun['urunAdi'];
                $fiyat = $urun['urunFiyat'];
               
                $fotograf =  base64_encode( $urun['urunFoto']);

                // Ürünün toplam fiyatını topla
                $toplam_fiyat += $fiyat;

                echo "<div>";
                echo "<h3>$ad</h3>";
                echo "<p>Fiyat: $fiyat</p>";
                echo ' <img src="data:image/jpeg;base64,' . $fotograf . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';

                echo "<form method='post'>";
                echo "<input type='hidden' name='urun_id' value='$urun_id'>";
                echo "<button type='submit' name='sepet_sil'>Sil</button>";
                echo "</form>";
                echo "</div>";
            } else {
               
            }
        }

        // Toplam fiyatı ekrana yazdır
        echo "<h4>Toplam Fiyat: $toplam_fiyat</h4>";
        
        // Ödeme formu
        echo "<div class='form-container'>";
        echo "<form method='post' action='odeme.php'>";
        echo "<input type='hidden' name='toplam_fiyat' value='$toplam_fiyat'>";
        echo "<button type='submit' name='odemeyi_tamamla'>Ödemeyi Tamamla</button>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "Sepetiniz boş.";
    }
} else {
    echo "Kullanıcı bulunamadı.";
}

if (isset($_POST['sepet_sil'])) {
    $urun_id = $_POST['urun_id'];

    $sql_sil = "DELETE FROM sepet WHERE kullanici_id = ? AND urun_id = ?";
    $stmt_sil = $conn->prepare($sql_sil);
    $stmt_sil->bind_param("ii", $kullanici_id, $urun_id);

    if ($stmt_sil->execute() === TRUE) {
        echo "<meta http-equiv='refresh' content='0'>";
        exit();
    } else {
        echo "Silme işlemi başarısız oldu: " . $conn->error;
    }
}

$conn->close();
?>

</div>
</body>
</html>
