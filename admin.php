<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            font-weight: 900;
            text-wrap: balance;
        }
    </style>
</head>
<body>

<?php
$Servername = 'localhost';
$Username = 'root';
$password = '';
$dbname = 'alisveris';
$conn = new mysqli($Servername, $Username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conn->connect_error) {
        die("connect fail" . $conn->connect_error);
    }

    $ad = $_POST['ad'];
    $fiyat = $_POST['fiyat'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $foto = $_FILES['foto']['tmp_name'];

    if (file_exists($foto)) {
        $imgData = addslashes(file_get_contents($foto));

        $sql = "INSERT INTO urunler (urunAdi, urunFiyat, urunStok, urunKategoriId, urunFoto) VALUES 
                ('$ad', '$fiyat', '$stok', '$kategori', '$imgData')";

        if ($conn->query($sql) === TRUE) {
            echo 'Kayıt Başarılı';
        } else {
            echo 'Başarısız: ' . $conn->error;
        }
    } else {
        echo 'Dosya yüklenirken bir hata oluştu.';
    }
}

$conn->close();
?>

<h1>ADMİN PANELİ</h1>
<form action="admin.php" method="post" enctype="multipart/form-data">
    <p>Ürün Adı:</p>
    <input type="text" name="ad">
    <p>Ürün Kategorisi:</p>
    <input type="number" name="kategori">
    <select id="">
        <option value=""></option>
        <option value="1">Erkek Giyim-Mont-1</option>
        <option value="2">Erkek Giyim-Ayakkabı-2</option>
        <option value="3">Erkek Giyim-Tişört-3</option>
        <option value="4">Erkek Giyim-Pantolon-4</option>
        <option value="5">Erkek Giyim-Uzun Kollu Tişört-5</option>
        <option value="6">Erkek Giyim-Eşofman-6</option>
        <option value="7">Erkek Giyim-Pijama-7</option>
        <option value="8">Kadın Giyim-Mont-8</option>
        <option value="9">Kadın Giyim-Ayakkabı-9</option>
        <option value="10">Kadın Giyim-Tişört-10</option>
        <option value="11">Kadın Giyim-Pantolon-11</option>
        <option value="12">Kadın Giyim-Uzun Kollu Tişört-12</option>
        <option value="13">Kadın Giyim-Eşofman-13</option>
        <option value="14">Kadın Giyim-Pijama-14</option>
        <option value="15">Çocuk Giyim-Mont-15</option>
        <option value="16">Çocuk Giyim-Ayakkabı-16</option>
        <option value="17">Çocuk Giyim-Tişört-17</option>
        <option value="18">Çocuk Giyim-Pantolon-18</option>
        <option value="19">Çocuk Giyim-Uzun Kollu Tişört-19</option>
        <option value="20">Çocuk Giyim-Eşofman-20</option>
        <option value="21">Çocuk Giyim-Pijama-21</option>
        <option value="22">Telefon-22</option>
        <option value="23">Tablet-23</option>
        <option value="24">Bilgisayar-24</option>
        <option value="25">Beyaz Eşya-25</option>
        <option value="26">Elektrikli Ev Aletleri-26</option>
        <option value="27">Kitap-27</option>
        <option value="28">Film-28</option>
        <option value="29">Oyun-29</option>
        <option value="30">Kamp-30</option>
        <option value="31">Avcılık-31</option>
        <option value="32">Fitness-32</option>
        <option value="33">Makyaj-33</option>
        <option value="34">Parfüm ve Deodarant-34</option>
        <option value="35">Ağız ve Diş Bakımı-35</option>
        <option value="36">Saat-36</option>
        <option value="37">Güneş Gözlüğü-37</option>
        <option value="38">Takı-38</option>
        <option value="39">Lastik-39</option>
        <option value="40">Jant-40</option>
    </select>
    <p>Ürün Fiyatı:</p>
    <input type="number" name="fiyat" id="">
    <p>Ürün Stok:</p>
    <input type="number" name="stok" id="">
    <p>Ürün Foto:</p>
    <input type="file" name="foto" id="">
    <br><br>
    <input type="submit" value="Deger">
</form>

</body>
</html>
