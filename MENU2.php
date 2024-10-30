<?php
session_start();
include 'dbbaglan.php';
?>

<!DOCTYPE html>
<html lang="en">



<head>
   <!--CSS DOSYALARIMIZ BURADA SAKLI -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="navMenu.php">
    <link rel="stylesheet" href="header.php">
    <?php
$Servername='localhost';
$Username='root';
$password='';
$dbname='alisveris';
$conn= new mysqli($Servername,$Username,$password,$dbname);

?>

<?php
$menuSQL="Select kat_adi from kategoriler";
$result= $conn->query($menuSQL);
    


?>

</head>
<body>
  
    
      <!--MARKA ADI ARAMA BUTONU VE GİRİŞ YAP ETİKETİ BURADA -->
      <div class="container" style="height: 100px; z-index:2;">
      <div class="GirisYap" style="right:100px;">

      <nav>
        <ul >
            
            <?php if (!isset($_SESSION["email"])) { ?>
             <li><a href="login.php" id="giris">Giriş</a></li>
               <li><a href="kayit.php" id="kayit">Kayıt Ol</a></li>  
             
                
            <?php } else { ?>
                <li>
                    <a href="#" id="user" style="text-decoration: none;"><?php echo $_SESSION["ad"]  .' '. $_SESSION["soyad"]; ?> </a>
                    <div class="dropdown-content">
                    <a href="sepet2.php">Sepetim</a>

                    <a href="favoriler.php">Favorilerim</a>
                        
                    <a href="sifredegistir.php" id="sifredegistir">Şifre Değiştir</a>
                        <a href="bizkimiz.php" id="bizkimiz">Bilgilerim</a>
                        <a href="cikis.php" > Güvenli Çıkış</a>
                        
                    </div>
                </li>
            <?php } ?>
        </ul>
     </nav>
     
         <h1><a href="index.php" style="text-decoration: none; color: orange; left:300px; position:relative;">TREND BURADA</a></h1>
         <form action="">
         
          
                 </form>
       
        </div>
        </div>
   
          <!--KATEGORİ ADLARI BU BÖLÜMDE HEPSİNİN AİT OLDUĞU CLASSLAR CSS BÖLÜMÜNDE ADLARIYLA BELİRTİLMİŞTİR ANLAYACAĞINIZ ÖLÇÜDE SİZE AKTARILACAK :) -->
        <nav>
            <div class="container" style="z-index:1;height:50px; width:2000px; position:relative;">
            <ul class="nav-menu">
              <div class="row">  <li>
                    <a href="#">
                      
                        Giyim
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Erkek Giyim</a>
                            <ul class="menu">
                                <li><<?php echo 'a href="kategori.php?kat_id=1">';?>Mont</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=2">';?>Ayakkabı</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=3">';?>Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=4">';?>Pantolon</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=5">';?>Uzun Kollu Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=6">';?>Eşofman</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=7">';?>Pijama</a></li>
                                
                            </ul>
                        </li>
                    <li><a href="#">Kadın Giyim</a>
                        <ul class="menu">
                                <li><<?php echo 'a href="kategori.php?kat_id=8">';?>Mont</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=9">';?>Ayakkabı</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=10">';?>Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=11">';?>Pantolon</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=12">';?>Uzun Kollu Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=13">';?>Eşofman</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=14">';?>Pijama</a></li>
                        
                        </ul>
                    </li>
                    <li><a href="#">Çocuk Giyim</a>
                        <ul class="menu">
                                <li><<?php echo 'a href="kategori.php?kat_id=15">';?>Mont</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=16">';?>Ayakkabı</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=17">';?>Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=18">';?>Pantolon</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=19">';?>Uzun Kollu Tişört</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=20">';?>Eşofman</a></li>
                                <li><<?php echo 'a href="kategori.php?kat_id=21">';?>Pijama</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                   
                    Elektronik
                </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=22">';?>Telefon</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=23">';?>Tablet</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=24">';?>Bilgisayar</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=25">';?>Beyaz Eşya</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=26">';?>Elektrikli Ev Aletleri</a></li>
                </ul>
            </li>
          
                <li>
                    <a href="#">
                       
                        Kitap,Film,Oyun
                    </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=27">';?>Kitaplar</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=28">';?>Filmler</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=29">';?>Oyunlar</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Spor
                    </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=30">';?>Kamp</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=31">';?>Avcılık</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=32">';?>Fitness</a></li>
                </ul>
            </li>
           
                <li>
                    <a href="#">
                        
                        Kozmetik Ve Kişisel Bakım
                    </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=33">';?>Makyaj</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=34">';?>Parfüm & Deodarant</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=35">';?>Ağız Ve Diş Bakımı</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Mücevher ve Takı
                    </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=36">';?>Saat</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=37">';?>Güneş Gözlüğü</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=38">';?>Takı</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Otomativ
                    </a>
                <ul class="sub-menu">
                <li><<?php echo 'a href="kategori.php?kat_id=39">';?>Lastik</a></li>
                <li><<?php echo 'a href="kategori.php?kat_id=40">';?>Jant</a></li>
                    
                    
                </ul>
            </li>
   </div>     </ul>
   </div>
    </nav>



</body>
</html>