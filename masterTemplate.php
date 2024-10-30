<!DOCTYPE html>
<html lang="en">
<head>
   <!--CSS DOSYALARIMIZ BURADA SAKLI -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="navMenu.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="section.css">
    <link rel="stylesheet" href="footer.css">

    <?php
$Servername='localhost';
$Username='root';
$password='';
$dbname='alisveris';
$conn= new mysqli($Servername,$Username,$password,$dbname);
?>

</head>
<body>
      <!--MARKA ADI ARAMA BUTONU VE GİRİŞ YAP ETİKETİ BURADA -->
    <header> 
      <div class="GirisYap">
        <ul>
            
            <li class="right"><a href="giris.html" style="color: orange;">Giriş Yap - Üye Ol</a></li>
           
        </ul>
      </div>
         <h1><a href="masterTemplate.html" style="text-decoration: none; color: orange;">TREND BURADA</a></h1>
         <form action="">
         <div class="search">

          <input class="search-input" type="search" placeholder="Aramaya Başla...">
           <input type="submit" value="Ara" class="butonArama" >
          </div>
          
                 </form>
     <!--   <div class="Favoriler">
<ul>
  <li><a href=""><img src="fotolar/favoriler.png" alt="">Favoriler</a></li>
</ul>
        </div>
       -->
    </header>
          <!--KATEGORİ ADLARI BU BÖLÜMDE HEPSİNİN AİT OLDUĞU CLASSLAR CSS BÖLÜMÜNDE ADLARIYLA BELİRTİLMİŞTİR ANLAYACAĞINIZ ÖLÇÜDE SİZE AKTARILACAK :) -->
        <nav>
            <ul class="nav-menu">
                <li>
                    <a href="#">
                      
                        Giyim
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Erkek Giyim</a>
                            <ul class="menu">
                                <li><a>Mont</a></li>
                                <li><a>Ayakkabı</a></li>
                                <li><a>Tişört</a></li>
                                <li><a>Pantolon</a></li>
                                <li><a>Uzun Kollu Tişört</a></li>
                                <li><a>Eşofman</a></li>
                                <li><a>Pijama</a></li>
                                
                            </ul>
                        </li>
                    <li><a href="#">Kadın Giyim</a>
                        <ul class="menu">
                            <li><a>Mont</a></li>
                            <li><a>Ayakkabı</a></li>
                            <li><a>Tişört</a></li>
                            <li><a>Pantolon</a></li>
                            <li><a>Uzun Kollu Tişört</a></li>
                            <li><a>Eşofman</a></li>
                            <li><a>Pijama</a></li>
                        
                        </ul>
                    </li>
                    <li><a href="#">Çocuk Giyim</a>
                        <ul class="menu">
                            <li><a>Mont</a></li>
                            <li><a >Ayakkabı</a></li>
                            <li><a >Tişört</a></li>
                            <li><a>Pantolon</a></li>
                            <li><a>Uzun Kollu Tişört</a></li>
                            <li><a>Eşofman</a></li>
                        
                            <li><a>Pijama</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                   
                    Elektronik
                </a>
                <ul class="sub-menu">
                    <li><a >Telefon</a></li>
                    <li><a >Tablet</a></li>
                    <li><a >Bilgisayar</a></li>
                    <li><a >Beyaz Eşya</a></li>
                    <li><a > Elektrikli Ev Aletleri</a></li>
                </ul>
            </li>
          
                <li>
                    <a href="#">
                       
                        Kitap,Film,Oyun
                    </a>
                <ul class="sub-menu">
                    <li><a >Kitaplar</a></li>
                    <li><a >Filmler</a></li>
                    <li><a >Oyunlar</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Spor
                    </a>
                <ul class="sub-menu">
                    <li><a >Kamp</a></li>
                    <li><a >Avcılık</a></li>
                    <li><a >Fitness</a></li>
                </ul>
            </li>
           
                <li>
                    <a href="#">
                        
                        Kozmetik Ve Kişisel Bakım
                    </a>
                <ul class="sub-menu">
                    <li><a >Makyaj</a></li>
                    <li><a >Parfüm & Deodorant</a></li>
                    <li><a >Ağız Ve Diş Bakımı</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Mücevher ve Takı
                    </a>
                <ul class="sub-menu">
                    <li><a >Saat</a></li>
                    <li><a >Güneş Gözlüğü</a></li>
                    <li><a >Takı</a></li>
                </ul>
            </li>
            
                <li>
                    <a href="#">
                      
                        Otomativ
                    </a>
                <ul class="sub-menu">
                    <li><a>Lastik</a></li>
                    <li><a>Jant</a></li>
                    
                    
                </ul>
            </li>
        </ul>
    </nav>
    <hr>
  <!--SECTİON BÖLÜMÜ YANİ İÇERİKLERİ YAZDIĞIMIZ BÖLÜM -->
    <section>
 <form action="masterTemplate.php" method="post">
          <!-- İNDİRİMLİ ÜRÜNLER BÖLÜMÜ HER BİRİ CLASSLARDAN OLUŞTURUYOR -->
          <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
           İNDİRİMLİ ÜRÜNLER
        </h3> 
      <div class="indirimUrunu "style="margin-top:2%">  
          <!-- 1.ÜRÜN  -->
         
        <div class="card" style="width: 18rem;">
            
        <img src="fotolar/d.png" class="card-img-top" alt="..." name="fotograf">
            <div class="card-body">
             
             <?php
$isim='';
$fiyat=0;
$sahtefiyat=0;
$id=1;

$sql="Select urun_adi,urun_fiyat,sahteFiyat from indirimliUrunler where urun_id=$id";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim=$row["urun_adi"];

$fiyat=$row["urun_fiyat"];

$sahtefiyat=$row["sahteFiyat"];
  }
} echo  '<h5 class="card-title" >'.$isim .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat.' TL</p>'; 
?>
             




              <a href="" class="btn btn-warning">ÜRÜNE GİT</a>
            </div>
          </div>

<!-- 2.ÜRÜN  -->
          <div class="card" style="width: 18rem;">
            <img src="fotolar/d.png" class="card-img-top" alt="...">
            <div class="card-body">
            <?php
$isim2='';
$fiyat2=0;
$sahtefiyat2=0;
$id2=2;

$sql="Select urun_adi,urun_fiyat,sahteFiyat from indirimliUrunler where urun_id=$id2";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim2=$row["urun_adi"];

$fiyat2=$row["urun_fiyat"];
$sahtefiyat2=$row["sahteFiyat"];  

}
} echo  '<h5 class="card-title" name="isim1">'.$isim2 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat2 .'</h6>';
            echo  '<p style="color: orange;" name="fiyat1">'.$fiyat2.' TL</p>'; 
?>
              <a href="#" class="btn btn-warning">ÜRÜNE GİT</a>
            </div>
          </div>

          <!-- 3.ÜRÜN  -->
          <div class="card" style="width: 18rem;">
            <img src="fotolar/d.png" class="card-img-top" alt="...">
            <div class="card-body">
            <?php
$isim3='';
$fiyat3=0;
$sahtefiyat3=0;
$id3=3;

$sql="Select urun_adi,urun_fiyat,sahteFiyat from indirimliUrunler where urun_id=$id3";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim3=$row["urun_adi"];

$fiyat3=$row["urun_fiyat"];

$sahtefiyat3=$row["sahteFiyat"];
  }
} echo  '<h5 class="card-title" >'.$isim3 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat3 .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat3.' TL</p>'; 
?>
              <a href="#" class="btn btn-warning">ÜRÜNE GİT</a>
            </div>
          </div>

          <!-- 4.ÜRÜN  -->
          <div class="card" style="width: 18rem;">
            <img src="fotolar/d.png" class="card-img-top" alt="...">
            <div class="card-body">
            <?php
$isim4='';
$fiyat4=0;
$sahtefiyat4=0;
$id4=4;

$sql="Select urun_adi,urun_fiyat,sahteFiyat from indirimliUrunler where urun_id=$id4";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim4=$row["urun_adi"];

$fiyat4=$row["urun_fiyat"];

$sahtefiyat4=$row["sahteFiyat"];
  }
} echo  '<h5 class="card-title" >'.$isim4 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat4 .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat4.' TL</p>'; 
?>
              <a href="#" class="btn btn-warning">ÜRÜNE GİT</a>
            </div>
          </div>

    </div></form>
      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        FAVORİ KATEGORİLER
    </h3>  
    <?php //Kategori adı belirleme
    $kat_id=0;
$kat_idRandom= $kat_id.rand(1,40);
    $katadi='';
    $katsql="Select kat_adi from kategoriler where kat_id=".$kat_idRandom;
 $result= $conn->query($katsql);
 if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
  $katadi=$row['kat_adi'];
  }
  
}   

//Belirlenen kategori adına göre ürünleri çekme
$urun="select urunId, urunAdi,urunFiyat,urunFoto from urunler inner join kategoriler on urunler.urunKategoriId=kategoriler.kat_id where urunKategoriId=".$kat_idRandom;
$sonuc= $conn->query($urun);

if($sonuc->num_rows>0){
  while($row2= $sonuc->fetch_assoc()){
    $urunid= $row2['urunId'];
    $urunadlari= $row2['urunAdi'];
    $urunfiyatlari=$row2['urunFiyat'];
    $urunfoto=base64_encode( $row2['urunFoto']);
     while($row3= $sonuc->fetch_assoc()){
    $urunid2= $row3['urunId'];
    $urunadlari2= $row3['urunAdi'];
    $urunfiyatlari2=$row3['urunFiyat'];
    $urunfoto2=base64_encode( $row3['urunFoto']);
    while($row4=$sonuc->fetch_assoc()){
    $urunid3= $row4['urunId'];
      $urunadlari3= $row4['urunAdi'];
      $urunfiyatlari3=$row4['urunFiyat'];
      $urunfoto3= base64_encode( $row4['urunFoto']);
      while($row5=$sonuc->fetch_assoc()){
    $urunid4= $row5['urunId'];
        $urunadlari4= $row5['urunAdi'];
        $urunfiyatlari4=$row5['urunFiyat'];
        $urunfoto4= base64_encode( $row5['urunFoto']);
      
      }
    }
  }
  }

}
 echo  ' <h5 style="color: orange; margin-top: 2%; " name="kategoriadi1">'.$katadi.'</h5>';
?>
    <!-- FAVORİ KATEGORİLER BÖLÜMÜMÜZ HER BİR FAVORİ KATEGORİ VE O KATEGORİYE AİT DÖRT ÜRÜN ŞEKLİNDE   -->
    <div class="enCokSatan">

        <!-- 1.1 ÜRÜN  -->
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  <!-- 1.2 ÜRÜN  -->
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto2 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari2. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari2. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid2 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>

  <!-- 1.3 ÜRÜN  -->
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto3 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari3. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari3. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid3 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>

  <!-- 1.4 ÜRÜN  -->
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto4 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari4. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari4. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid4 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>
  <?php
$kat_id2=0;
$kat_idRandom2=$kat_id2.rand(1,40);
while($kat_idRandom==$kat_idRandom2){
  $kat_idRandom2=$kat_id2.rand(1,40);
}
$katadi2='';
$katsql2="Select kat_adi from kategoriler where kat_id=".$kat_idRandom2;
$result2= $conn->query($katsql2);
if($result2->num_rows>0){

while($row= $result2->fetch_assoc()){
$katadi2=$row['kat_adi'];
}

}   

$urun2="select urunId,urunFoto, urunAdi,urunFiyat from urunler inner join kategoriler on urunler.urunKategoriId=kategoriler.kat_id where urunKategoriId=".$kat_idRandom2;
$sonuc2= $conn->query($urun2);

if($sonuc2->num_rows>0){
  while($row6= $sonuc2->fetch_assoc()){
    $urunid5= $row6['urunId'];
    $urunadlari5= $row6['urunAdi'];
    $urunfiyatlari5=$row6['urunFiyat'];
    $urunfoto5=base64_encode( $row6['urunFoto']);
     while($row7= $sonuc2->fetch_assoc()){
    $urunid6= $row7['urunId'];
    $urunadlari6= $row7['urunAdi'];
    $urunfiyatlari6=$row7['urunFiyat'];
    $urunfoto6=base64_encode( $row7['urunFoto']);
    while($row8=$sonuc2->fetch_assoc()){
      $urunid7= $row8['urunId'];
      $urunadlari7= $row8['urunAdi'];
      $urunfiyatlari7=$row8['urunFiyat'];
      $urunfoto7= base64_encode( $row8['urunFoto']);
      while($row9=$sonuc2->fetch_assoc()){
        $urunid8= $row9['urunId'];
        $urunadlari8= $row9['urunAdi'];
        $urunfiyatlari8=$row9['urunFiyat'];
        $urunfoto8= base64_encode( $row9['urunFoto']);
      
      }
    }
  }
  }

}

?>

  <!-- 2.KATEGORİLER BÖLÜMÜ -->
  <?php
  echo' <h5 style="color: orange; margin-top: 4%;" >'.$katadi2.'</h5>'; ?>

  <div class="enCokSatan">

    <!-- 2.1.ÜRÜN  -->
    <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto5 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari5. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari5. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid5 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
<!-- 2.2.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto6 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari6. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari6. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid6 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>

<!-- 2.3.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto7 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari7. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari7. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid7 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
<!-- 2.4.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto8 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari8. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari8. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid8 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
    </div>

    <?php
$kat_id3=0;
$kat_idRandom3=$kat_id3.rand(1,40);
while(($kat_idRandom==$kat_idRandom2 && $kat_idRandom2==$kat_idRandom3) && ($kat_idRandom==$kat_idRandom3)){
  $kat_idRandom3=$kat_id3.rand(1,40);
}
$katadi3='';
$katsql3="Select kat_adi from kategoriler where kat_id=".$kat_idRandom3;
$result3= $conn->query($katsql3);
if($result3->num_rows>0){

while($row= $result3->fetch_assoc()){
$katadi3=$row['kat_adi'];
}

}   

$urun3="select urunId,urunFoto, urunAdi,urunFiyat from urunler inner join kategoriler on urunler.urunKategoriId=kategoriler.kat_id where urunKategoriId=".$kat_idRandom3;
$sonuc3= $conn->query($urun3);

if($sonuc3->num_rows>0){
  while($row10= $sonuc3->fetch_assoc()){
    $urunid9= $row10['urunId'];
    $urunadlari9= $row10['urunAdi'];
    $urunfiyatlari9=$row10['urunFiyat'];
    $urunfoto9=base64_encode( $row10['urunFoto']);
     while($row11= $sonuc3->fetch_assoc()){
    $urunid10= $row11['urunId'];
    $urunadlari10= $row11['urunAdi'];
    $urunfiyatlari10=$row11['urunFiyat'];
    $urunfoto10=base64_encode( $row11['urunFoto']);
    while($row12=$sonuc3->fetch_assoc()){
      $urunid11= $row12['urunId'];
      $urunadlari11= $row12['urunAdi'];
      $urunfiyatlari11=$row12['urunFiyat'];
      $urunfoto11= base64_encode( $row12['urunFoto']);
      while($row13=$sonuc3->fetch_assoc()){
        $urunid12= $row13['urunId'];
        $urunadlari12= $row13['urunAdi'];
        $urunfiyatlari12=$row13['urunFiyat'];
        $urunfoto12= base64_encode( $row13['urunFoto']);
      
      }
    }
  }
  }

}

?>

  <!-- 3.KATEGORİLER BÖLÜMÜ -->
  <?php
  echo' <h5 style="color: orange; margin-top: 4%;" >'.$katadi3.'</h5>'; ?>

  <div class="enCokSatan">

    <!-- 3.1.ÜRÜN  -->
    <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto9 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari9. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari9. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid9 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
<!-- 3.2.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto10 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari10. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari10. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid10 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>

<!-- 3.3.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto11 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari11. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari11. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid11 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
<!-- 3.4.ÜRÜN  -->
<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto12 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari12. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari12. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid12 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
    </div>


   
  
      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        EN ÇOK SATAN ÜRÜNLER
    </h3>  
    <!-- EN ÇOK SATAN ÜRÜNLER -->
      <div class="enCokSatanUrun" style="margin-top: 2%;">
        <div class="card" style="width: 18rem;">
        
         
            
           <!--    
$var1 = rand(1, 1000);

do {
    $var2 = rand(1, 1000);
} while ($var2 == $var1);

do {
    $var3 = rand(1, 1000);
} while ($var3 == $var1 || $var3 == $var2);

do {
    $var4 = rand(1, 1000);
} while ($var4 == $var1 || $var4 == $var2 || $var4 == $var3);

bu uygulanacak katrandomidlere 
-->

            <?php

$urunId=0;

$urunIdRandom=$urunId.rand(1,160);
$urunSql="Select urunId, urunAdi,urunFiyat,urunFoto from urunler  where urunId=". $urunIdRandom;
$result4=$conn->query($urunSql);
if($result4->num_rows>0){
  while($rows=$result4->fetch_assoc()){
    $urunID = $rows['urunId'];
    $urunAd = $rows['urunAdi'];
    $urunFiyat = $rows['urunFiyat'];
    $urunFoto=base64_encode( $rows["urunFoto"]);
    

   
 

  } 
  echo ' <img src="data:image/jpeg;base64,' . $urunFoto . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';

  
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $urunAd . '</h5>';
    echo '<p style="color: orange;">' . $urunFiyat . 'TL</p>';
    echo '<a href="urun.php?urunid=' . $urunID . '" class="btn btn-warning">ÜRÜNE GİT</a>';
}
?>
           </div>
          
          </div>
          <div class="card" style="width: 18rem;">
          <?php

$urunId2=0;

$urunIdRandom2=$urunId2.rand(1,160);
while($urunIdRandom==$urunIdRandom2){
  $urunIdRandom2=$urunId2.rand(1,160);
}
$urunSql2="Select urunId, urunAdi,urunFiyat,urunFoto from urunler  where urunId=".$urunIdRandom2;
$result5=$conn->query($urunSql2);
if($result5->num_rows>0){
  while($rows2=$result5->fetch_assoc()){
    $urunID2 = $rows2['urunId'];
    $urunAd2 = $rows2['urunAdi'];
    $urunFiyat2 = $rows2['urunFiyat'];
    $urunFoto2=base64_encode( $rows2["urunFoto"]);
  } 
  echo ' <img src="data:image/jpeg;base64,' . $urunFoto2 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $urunAd2 . '</h5>';
    echo '<p style="color: orange;">' . $urunFiyat2 . 'TL</p>';
    echo '<a href="urun.php?urunid=' . $urunID2 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
}
?>
          </div>
          </div>
          <div class="card" style="width: 18rem;">
          <?php

$urunId3=0;

$urunIdRandom3=$urunId3.rand(1,160);
while(($urunIdRandom==$urunIdRandom2)&&($urunIdRandom3==$urunIdRandom2)){
  $urunIdRandom3=$urunId3.rand(1,160);
}
$urunSql3="Select urunId, urunAdi,urunFiyat,urunFoto from urunler  where urunId=".$urunIdRandom3;
$result6=$conn->query($urunSql3);
if($result6->num_rows>0){
  while($rows3=$result6->fetch_assoc()){
    $urunID3 = $rows3['urunId'];
    $urunAd3 = $rows3['urunAdi'];
    $urunFiyat3 = $rows3['urunFiyat'];
    $urunFoto3=base64_encode( $rows3["urunFoto"]);
  } 
  echo ' <img src="data:image/jpeg;base64,' . $urunFoto3 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $urunAd3 . '</h5>';
    echo '<p style="color: orange;">' . $urunFiyat3 . 'TL</p>';
    echo '<a href="urun.php?urunid=' . $urunID3 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
}
?>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
          <?php

$urunId4=0;


$urunIdRandom4=$urunId4.rand(1,160);
while(($urunIdRandom==$urunIdRandom2)&&($urunIdRandom3==$urunIdRandom4)){
  $urunIdRandom4=$urunId4.rand(1,160);
}
$urunSql4="Select urunId, urunAdi,urunFiyat,urunFoto from urunler  where urunId=".$urunIdRandom4;
$result7=$conn->query($urunSql4);
if($result7->num_rows>0){
  while($rows4=$result7->fetch_assoc()){
    $urunID4 = $rows4['urunId'];
    $urunAd4 = $rows4['urunAdi'];
    $urunFiyat4 = $rows4['urunFiyat'];
    $urunFoto4=base64_encode( $rows4["urunFoto"]);
  } 
  echo ' <img src="data:image/jpeg;base64,' . $urunFoto4 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $urunAd4 . '</h5>';
    echo '<p style="color: orange;">' . $urunFiyat4 . 'TL</p>';
    echo '<a href="urun.php?urunid=' . $urunID4. '" class="btn btn-warning">ÜRÜNE GİT</a>';
}
?>
            </div>
          </div>

      </div>

      <!-- Markalar Bölümü -->
      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        MARKALAR
    </h3> 
    <div class="markalar" style="margin-top: 2%;">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">
<img src="fotolar/d.png" alt="">


    </div>

    
</section>

<article>
  
</article>
<!-- Footer Bölümü -->
<footer>
  <div class="ilkSatir">
   <h4>Trend Burada </h4> 
   <ul>
    <li>Biz Kimiz</li>
    <li>Kariyer</li>
    <li>Trend Burada Satıcısı Olmak İstiyorum</li>
  </ul>
</div>
<div class="ikinciSatir">
   <h4>Güvenli Alışveriş</h4>
<ul>
  <li><img src="fotolar/Visa_Logo.png" alt=""></li>
  <li><img src="fotolar/MasterCard_early_1990s_logo.png" alt=""></li>
  <li><img src="fotolar/Troy_logo.png" alt=""></li>
</ul>
</div>
<div class="ucuncuSatir">
<h4>Kampanyalar</h4>
<ul>
  <li>Aktif Kampanyalar</li>
  <li>Elite Üyelik</li>
  <li>Trendyol Fikirleri</li>
</ul>
</div>
<div class="dorduncuSatir">
  <h4>Yardım</h4>
<ul>
  <li>Sıkça Sorulan Sorular</li>
  <li>Canlı Yardım</li>
  <li>Nasıl İade Edebilirim</li>
  <li>İşlem Rehberi</li>
</ul></div>


<div class="altinciSatir">
  <h4>İletişim</h4>
  <p> <img src="fotolar/gm.png" alt="">info@trendburada.com</p>
  <p><img src="fotolar/wp.png" alt="">08500005050</p>
  
</div>

<div class="sosyalMedya">
<img src="fotolar/instagram.webp" alt="">
<img src="fotolar/facebook.webp" alt="">
<img src="fotolar/x.png" alt="">
<img src="fotolar/linkedln.webp" alt="">
<img src="fotolar/pinterest.png" alt="">

</div>
</footer>
    
</body>
</html>