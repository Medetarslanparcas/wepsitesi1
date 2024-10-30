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
<link rel="stylesheet" href="indirimliUrunCss.php">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<?php
include 'MENU2.php';

?>

<body>
<?php
$urunId=$_GET["urunid"];

$sql="Select urun_adi,urun_fiyat,sahteFiyat,fotograf from indirimliurunler where urun_id=".$urunId;
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $urunAdi= $row['urun_adi'];
    $urunFiyat=$row['urun_fiyat'];
$fotograf=base64_encode($row["fotograf"]);
   
    $urunsahte= $row['sahteFiyat'];
}
?>

<div class="container">

<div class="row">

<div class="Urun" style="position:relative; left:200px;">
<?php
echo '<img src="data:image/jpeg;base64,' . $fotograf. '" alt="">';

echo '<p class="ad" style="color:orange;">'.$urunAdi . '</p>';
echo '<p class="fiyat">'.$urunFiyat.' TL</p>';
echo '<p style="color:red;        text-decoration:line-through;
;
 position:relative;left:450px;bottom:420px;"> '.$urunsahte.'</p>';

?>



<div class="Buton">
  <?php echo '<a href="cart.php?urunid=' . $urunId . '">';?><input class="btn btn-outline-warning sepet" type="button" style="width: 120px; color:black;" value="Sepete Ekle" ></a> 
    <input class="btn btn-outline-warning favori" type="button" style="width: 120px; color:black;" value="Favorilere Ekle">

</div>
</div>
</div>

</div>
    



</body>
</html>