<?php
include "dbbaglan.php";
include "menu.php";
?>
<?php


// Kullanıcı bilgilerini oturumdan alın
$email = $_SESSION['email'];

// Kullanıcı bilgilerini veritabanından çekin
$stmt = $conn->prepare("SELECT ad, soyad, email, tel FROM kullanici WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST['email'];
    $new_tel = $_POST['tel'];

    // Kullanıcı bilgilerini güncelleme sorgusu
    $stmt = $conn->prepare("UPDATE kullanici SET email = ?, tel = ? WHERE email = ?");
    $stmt->bind_param("sss", $new_email, $new_tel, $email);

    if ($stmt->execute()) {
        $_SESSION['email'] = $new_email;
        $_SESSION['message'] = "Bilgileriniz başarıyla güncellendi.";
        // Yönlendirme yaparak sayfanın tekrar yüklenmesini sağla
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = "Bilgiler güncellenirken bir hata oluştu.";
    }
   
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Bilgileri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .info {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .info label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .info input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .info input[readonly] {
            background-color: #e9e9e9;
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #e9ffe9;
            color: green;
        }
        .error {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ffcccc;
            border-radius: 5px;
            background-color: #ffebeb;
            color: red;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            text-align: center;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
  
    <div class="container">
        <?php if (isset($_SESSION['message'])) { echo "<div class='message'>{$_SESSION['message']}</div>"; unset($_SESSION['message']); } ?>
        <div class="info">
            <label for="ad">Ad:</label>
            <input type="text" id="ad" name="ad" value="<?php echo htmlspecialchars($user['ad']); ?>" readonly>

            <label for="soyad">Soyad:</label>
            <input type="text" id="soyad" name="soyad" value="<?php echo htmlspecialchars($user['soyad']); ?>" readonly>

            <form method="post" action="bizkimiz.php">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

                <label for="tel">Telefon:</label>
                <input type="tel" id="tel" name="tel" value="<?php echo htmlspecialchars($user['tel']); ?>" required pattern="[0-9]{11}" maxlength="11">

                <input type="submit" value="Güncelle" class="btn " style="background-color: orange;">
            </form>
        </div>
    </div>
</body>
</html>
