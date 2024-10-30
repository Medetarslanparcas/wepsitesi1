<!DOCTYPE html>
<html lang="en">
<head>
   <!--CSS DOSYALARIMIZ BURADA SAKLI -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="section.php">


    <?php
$Servername='localhost';
$Username='root';
$password='';
$dbname='alisveris';
$conn= new mysqli($Servername,$Username,$password,$dbname);
?>

</head>
<body>
 
   
  <!--SECTİON BÖLÜMÜ YANİ İÇERİKLERİ YAZDIĞIMIZ BÖLÜM -->
    <section>
      <div class="container">
      
 <form action="masterTemplate.php" method="post">
          <!-- İNDİRİMLİ ÜRÜNLER BÖLÜMÜ HER BİRİ CLASSLARDAN OLUŞTURUYOR -->
          <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
           İNDİRİMLİ ÜRÜNLER
        </h3> 
      <div class="indirimUrunu "style="margin-top:2%">  
        <div class="row">  <!-- 1.ÜRÜN  -->
          <div class="col-sm-6 col-md-4 col-lg-3">
         
        <div class="card" style="width: 18rem;">
            
     
             <?php  
             
$isim='';
$fiyat=0;
$sahtefiyat=0;
$id=rand(1,24);

$sql="Select urun_adi,urun_fiyat,sahteFiyat,fotograf from indirimliurunler where urun_id=$id";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim=$row["urun_adi"];

$fiyat=$row["urun_fiyat"];
$fotograf=base64_encode($row["fotograf"]);
$sahtefiyat=$row["sahteFiyat"];
  } echo '<img src="data:image/jpeg;base64,' . $fotograf . '"class="card-img-top" alt="..." name="fotograf" style="width: 280px;height:280px;">';
       echo  ' <div class="card-body"> ';
} echo  '<h5 class="card-title" >'.$isim .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat.' TL</p>'; 
 echo '<a href="indirimliUrun.php?urunid=' . $id . '" class="btn btn-warning">ÜRÜNE GİT</a>';
 ?>
             




             
            </div>
          </div>
</div>
<!-- 2.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

          <div class="card" style="width: 18rem;">
       
            <?php
$isim2='';
$fiyat2=0;
$sahtefiyat2=0;
$id2=rand(1,24);

$sql="Select urun_adi,urun_fiyat,sahteFiyat,fotograf from indirimliurunler where urun_id=$id2";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim2=$row["urun_adi"];

$fiyat2=$row["urun_fiyat"];
$fotograf2=base64_encode($row["fotograf"]);
$sahtefiyat2=$row["sahteFiyat"];
  }
  echo '<img src="data:image/jpeg;base64,' . $fotograf2 . '"class="card-img-top" alt="..." name="fotograf" style="width: 280px;height:280px;">';

 echo ' <div class="card-body">';
} echo  '<h5 class="card-title" >'.$isim2 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat2 .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat2.' TL</p>'; 
 echo '<a href="indirimliUrun.php?urunid=' . $id2 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
?>
             
            </div>
          </div>
</div>
          <!-- 3.ÜRÜN  -->
          <div class="col-sm-6 col-md-4 col-lg-3">

          <div class="card" style="width: 18rem;">
      
            <?php
$isim3='';
$fiyat3=0;
$sahtefiyat3=0;
$id3=rand(1,24);

$sql="Select urun_adi,urun_fiyat,sahteFiyat,fotograf from indirimliurunler where urun_id=$id3";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim3=$row["urun_adi"];

$fiyat3=$row["urun_fiyat"];
$fotograf3=base64_encode( $row["fotograf"]);
$sahtefiyat3=$row["sahteFiyat"];
  }
}
echo '<img src="data:image/jpeg;base64,' . $fotograf3 . '"class="card-img-top" alt="..." name="fotograf" style="width: 280px;height:280px;">';
       echo  ' <div class="card-body"> '; 
echo  '<h5 class="card-title" >'.$isim3 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat3 .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat3.' TL</p>'; 
 echo '<a href="indirimliUrun.php?urunid=' . $id3 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
?>
             
            </div>
          </div>
</div>
          <!-- 4.ÜRÜN  -->
          <div class="col-sm-6 col-md-4 col-lg-3">

          <div class="card" style="width: 18rem;">
         
            <?php
$isim4='';
$fiyat4=0;
$sahtefiyat4=0;
$id4=rand(1,24);

$sql="Select urun_adi,urun_fiyat,sahteFiyat,fotograf from indirimliurunler where urun_id=$id4";
$result= $conn->query($sql);

if($result->num_rows>0){

  while($row= $result->fetch_assoc()){
    $isim4=$row["urun_adi"];

$fiyat4=$row["urun_fiyat"];
$fotograf4=base64_encode($row["fotograf"]);
$sahtefiyat4=$row["sahteFiyat"];
  }
} 
echo '<img src="data:image/jpeg;base64,' . $fotograf4 . '"class="card-img-top" alt="..." name="fotograf" style="width: 280px;height:280px;">';
       echo  ' <div class="card-body"> ';
echo  '<h5 class="card-title" >'.$isim4 .'</h5>';
echo '<h6 class="card-title" style=" color: red;"> <del>' .$sahtefiyat4 .'</h6>';

            echo  '<p style="color: orange;" >'.$fiyat4.' TL</p>'; 
 echo '<a href="indirimliUrun.php?urunid=' . $id4 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
?>
              
            </div>
          </div>
</div>
    </div></form></div>

<!---->

      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        FAVORİ KATEGORİLER
    </h3>  
    <?php //Kategori adı belirleme
    $kat_id=0;

$kat_id2=0;

$kat_id3=0;
$kat_idRandom= $kat_id.rand(1,40);

do{
 $kat_idRandom2=$kat_id2.rand(1,40);
}while($kat_idRandom==$kat_idRandom2);

do{
  $kat_idRandom3=$kat_id3.rand(1,40);
}while(($kat_idRandom2==$kat_idRandom3)&& ($kat_idRandom3==$kat_idRandom));

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
<div class="row">
        <!-- 1.1 ÜRÜN  -->
        <div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
</div>
  <!-- 1.2 ÜRÜN  -->
  <div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto2 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari2. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari2. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid2 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
</div>

  <!-- 1.3 ÜRÜN  -->
  <div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto3 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari3. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari3. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid3 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
</div>
  <!-- 1.4 ÜRÜN  -->
  <div class="col-sm-6 col-md-4 col-lg-3">
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
 
</div>
  </div>
  <?php


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
<div class="row">
    <!-- 2.1.ÜRÜN  -->
  <div class="col-sm-6 col-md-4 col-lg-3">

    <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto5 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari5. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari5. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid5 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>
<!-- 2.2.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto6 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari6. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari6. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid6 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>

<!-- 2.3.ÜRÜN  --><div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">


 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto7 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari7. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari7. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid7 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>
<!-- 2.4.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

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
    </div>
    </div>
    <?php

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
<div class="row">
    <!-- 3.1.ÜRÜN  -->
  <div class="col-sm-6 col-md-4 col-lg-3">

    <div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto9 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari9. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari9. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid9 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>
<!-- 3.2.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto10 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari10. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari10. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid10 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>

<!-- 3.3.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

<div class="card" style="width: 18rem;">
 <?php   
  echo ' <img src="data:image/jpeg;base64,' . $urunfoto11 . '" class="card-img-top" alt=""style="width:270px; height:280px;"> ';
 echo  ' <div class="card-body">';
     
     echo ' <h5 class="card-title">'.$urunadlari11. '</h5>';
     echo '<p style="color: orange;">'.$urunfiyatlari11. ' TL</p>';
     
     echo '<a href="urun.php?urunid=' . $urunid11 . '" class="btn btn-warning">ÜRÜNE GİT</a>';
    ?> </div>
  </div>
  </div>
<!-- 3.4.ÜRÜN  -->
<div class="col-sm-6 col-md-4 col-lg-3">

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

</div>
    </div>


   
  
      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        EN ÇOK SATAN ÜRÜNLER
    </h3>  
    <!-- EN ÇOK SATAN ÜRÜNLER -->
      <div class="enCokSatanUrun" style="margin-top: 2%;">
      <div class="row">
        <!--FAVORİ ÜRÜN 1   -->
<div class="col-sm-6 col-md-4 col-lg-3">

        <div class="card" style="width: 18rem;">
        
         
        

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
          </div>
        <!--FAVORİ ÜRÜN 2   -->

<div class="col-sm-6 col-md-4 col-lg-3">
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
          </div>
        <!--FAVORİ ÜRÜN 3  -->

<div class="col-sm-6 col-md-4 col-lg-3">

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
          </div>

        <!--FAVORİ ÜRÜN 4  -->

<div class="col-sm-6 col-md-4 col-lg-3">
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
          
        
        </div>
      </div>

      <!-- Markalar Bölümü -->
      <h3 style="color: orange; margin-top: 4%; font-weight: 800;">
        MARKALAR
    </h3> 
  <div class="markalar">
<img src="markafoto/adidas.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/bargello.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/philips.webp" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/levis.webp" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/huawei.webp" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">  
<img src="markafoto/avon.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/rayban.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/arzum.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/apple.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/altus.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/beko.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/vogue.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/bershaka.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/beymen.jpg" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/boyner.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/bvg.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/casio.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/civil.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/colgate.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/daniel.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/defacto.jpg" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/lcw.png" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/flo.jpg" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
<img src="markafoto/gucci.jpg" alt="" style="width:10%; margin-left:1%; border-radius:20%; ">
</div>

    
</div>
    
</section>



    
</body>
</html>