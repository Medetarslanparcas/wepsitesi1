<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
$Servername='localhost';
$Username='root';
$password='';
$dbname='alisveris';
$conn= new mysqli($Servername,$Username,$password,$dbname);
?>
<link rel="stylesheet" href="urunCSS.php">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<?php

include 'MENU2.php';

?>

<body>
<?php
if (isset($_POST['favori_ekle'])) {
    
    if (isset($_SESSION['email'])) {
        $urun_id = $_POST['urun_id'];
        $email = $_SESSION['email'];

        $sql_user = "SELECT kullanici_id FROM kullanici WHERE email = ?";
        $stmt = $conn->prepare($sql_user);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_user = $stmt->get_result();

        if ($result_user->num_rows > 0) {
            $row = $result_user->fetch_assoc();
            $kullanici_id = $row['kullanici_id'];

            $sql = "INSERT INTO favoriler (kullanici_id, urun_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $kullanici_id, $urun_id);

            if ($stmt->execute() === TRUE) {
              echo '<div class="container" style="color:orange; position:relative;left:320px; font-size:xx-large; top:200px;">';
                echo "Ürün favorilere eklendi.";
              echo '</div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php">';

              exit();
             
            } else {
                echo "Hata oluştu: " . $conn->error;
            }
        } else {
            echo "Kullanıcı bulunamadı.";
        }
    } else {
        echo "Giriş yapın önce";
        echo '<meta http-equiv="refresh" content="1;url=login.php">';
    }
}

if (isset($_POST['sepete_ekle'])) {
    if (isset($_SESSION['email'])) {
        $urun_id = $_POST['urun_id'];
        $email = $_SESSION['email'];

        $sql_user = "SELECT kullanici_id FROM kullanici WHERE email = ?";
        $stmt = $conn->prepare($sql_user);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_user = $stmt->get_result();

        if ($result_user->num_rows > 0) {
            $row = $result_user->fetch_assoc();
            $kullanici_id = $row['kullanici_id'];

            $sql = "INSERT INTO sepet (kullanici_id, urun_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            
            $stmt->bind_param("ii", $kullanici_id, $urun_id);

            if ($stmt->execute() === TRUE) {
                echo '<p style="color:orange;position:relative;left:600px;top:300px;font-size:80px;">Ürün Sepete Eklendi </p>';
                echo '<meta http-equiv="refresh" content="1;url=sepet2.php">';

                exit();

            } else {
                echo "Hata oluştu: " . $conn->error;
            }
        } else {
            echo "Kullanıcı bulunamadı.";
        }
    } else {
        echo "Giriş yapın önce";
        echo '<meta http-equiv="refresh" content="1;url=login.php">';
    }
}


$urunId=$_GET["urunid"];

$sql="Select urunAdi,urunFiyat,urunFoto,urunStok from urunler where urunId=".$urunId;
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $urunAdi= $row['urunAdi'];
    $urunFiyat=$row['urunFiyat'];
    $urunFoto= base64_encode($row['urunFoto']);
    $urunStok= $row['urunStok'];
}
?>

<div class="container">

<div class="row">

<div class="Urun">
<?php
echo '<img src="data:image/jpeg;base64,' . $urunFoto. '" alt="">';
echo '<p class="ad">'.$urunAdi . '</p>';
echo '<p class="fiyat">'.$urunFiyat.' TL</p>';
echo '<p class="stok"Stok Adedi: >Stok Adedi: '.$urunStok.'</p>';


echo "<form method='post'>";
echo '<div class="Buton" >';
echo "<input type='hidden' name='urun_id' value='" . $urunId . "'>";

echo "<button type='submit' name='sepete_ekle' style='margin:5px; bottom:250px; position:relative;' >Sepete Ekle</button>";
echo "<button type='submit' style='margin:5px; position:relative; bottom:250px;' name='favori_ekle'>Favoriye Ekle</button>";

echo '</div>';
echo "</form>";
$conn->close();

?>




</div>
</div>

</div>
    



</body>
</html>