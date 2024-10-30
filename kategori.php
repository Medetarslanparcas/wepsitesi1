
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'MENU2.php';
?>
<style>

section{
    width: 60%;
    position: relative;
    left: 20%;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php
    $Servername = 'localhost';
    $Username = 'root';
    $password = '';
    $dbname = 'alisveris';
    $conn = new mysqli($Servername, $Username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }
$kategoriId=$_GET['kat_id'];
$katAdı="Select kat_adi from kategoriler where kat_id=".$kategoriId;
$sonuc= $conn->query($katAdı);
if($sonuc->num_rows>0){
    while($rowss=$sonuc->fetch_assoc()){
        $katAdi=$rowss['kat_adi'];
    }
}

    $urunler = array();
    $urun = "SELECT urunId, urunFoto, urunAdi, urunFiyat FROM urunler 
             INNER JOIN kategoriler ON urunler.urunKategoriId = kategoriler.kat_id 
             WHERE urunKategoriId =".$kategoriId;
    $result = $conn->query($urun);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $urunler[] = $row;
        }
    }

    $conn->close();
    ?>
</head>
<body>

<section>
  
<div class="row">
    <?php
   echo '<h2 style="font-size: xx-large; color: orange; float:left; margin-bottom: 20px; font-weight:bold; " class="col-xxl-12" >'.$katAdi.'</h2></div>';
    ?>
    <div class="container">
        <div class="row ">
            <?php
            foreach ($urunler as $urun) {
                echo '<div class="col-xxl-3" style="margin-left: 10px; " >';
                echo '<div class="card mb-3" >';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($urun['urunFoto']) . '" class="card-img-top" alt="Ürün Fotoğrafı" style="height:280px; width: 270px; ">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($urun['urunAdi']) . '</h5>';
                echo '<p class="card-text" style="color:orange;">' . htmlspecialchars($urun['urunFiyat']) . ' TL</p>';
                echo '<a href="urun.php?urunid='.htmlspecialchars($urun['urunId']).'" class="btn btn-warning">ÜRÜNE GİT</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div></section>
</body>
<?php
include 'Foter.php';
?>
</html>
