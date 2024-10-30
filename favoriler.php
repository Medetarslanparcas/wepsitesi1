
<!DOCTYPE html>
<html lang="en">
<head><?php
include 'MENU2.php';
if (!isset($_SESSION['email'])) {
    header("Location: giris.php");
    exit();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container" >
<?php
$email = $_SESSION['email'];

$sql_user = "SELECT kullanici_id FROM kullanici WHERE email = ?";
$stmt = $conn->prepare($sql_user);
$stmt->bind_param("s", $email);
$stmt->execute();
$result_user = $stmt->get_result();

if ($result_user->num_rows > 0) {
    $row = $result_user->fetch_assoc();
    $kullanici_id = $row['kullanici_id'];

    $sql_favoriler = "SELECT DISTINCT urun_id FROM favoriler WHERE kullanici_id = ?";
    $stmt = $conn->prepare($sql_favoriler);
    $stmt->bind_param("i", $kullanici_id);
    $stmt->execute();
    $result_favoriler = $stmt->get_result();

    if ($result_favoriler->num_rows > 0) {
        echo '<h2 style="color:orange;font-size:large; font-weight:900; margin-top:20px;">Favori Ürünleriniz</h2>';

        while ($favori_row = $result_favoriler->fetch_assoc()) {
            $urun_id = $favori_row['urun_id'];

            $sql_urun = "SELECT * FROM urunler WHERE urunId = ?";
            $stmt_urun = $conn->prepare($sql_urun);
            $stmt_urun->bind_param("i", $urun_id);
            $stmt_urun->execute();
            $result_urun = $stmt_urun->get_result();

            if ($result_urun->num_rows > 0) {
                $urun = $result_urun->fetch_assoc();
                $ad = $urun['urunAdi'];
                $fiyat = $urun['urunFiyat'];
              
                $urunFoto=base64_encode( $urun['urunFoto']);
echo '<div style="display:flex; width:300px;" class="row">';
                echo '<div >';
                echo '<h3 style="font-size:large;color:orange; margin-top:15px;">'.$ad.'</h3>';
               
                
                echo '<img src="data:image/jpeg;base64,' . $urunFoto. '" alt="" style="heigth:280px; width:270px;">';
 echo '<p style="color:orange">Fiyat:'. $fiyat.'</p>';
                echo "<form method='post'>";
                echo "<input type='hidden' name='urun_id' value='$urun_id'>";
          
                echo '<button type="submit" name="favori_sil" style="background-color:orange;width:40px;">Sil</button>';
                echo "</form>";
                echo '</div>';
                echo '</div>';

            } 
        }
    } else {
        echo "Henüz favori eklenmemiş.";
    }
} else {
    echo "Kullanıcı bulunamadı.";
}

if (isset($_POST['favori_sil'])) {
    $urun_id = $_POST['urun_id'];

    $sql_sil = "DELETE FROM favoriler WHERE kullanici_id = ? AND urun_id = ?";
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
