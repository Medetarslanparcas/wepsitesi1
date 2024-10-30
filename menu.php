<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .n-menu {
            
            width: 100%;
            height: 60px;
            margin-top: 20px;
            text-align: center;
        }
        .n-menu ul {
            margin: 0;
            padding: 0;
            display: inline-block;
        }
        .n-menu ul li {
            list-style: none;
            display: inline-block;
            margin-right: 10px;
            position: relative;
        }
        .n-menu ul li a {
            text-decoration: none;
           color:whitesmoke;
            padding: 0px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }
        .n-menu ul li a:hover {
            background-color: white;
        }
        .n-menu ul li .dropdown-content {
            display: none;
            position: absolute;
            background-color: #7e7e7e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .n-menu ul li .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .n-menu ul li .dropdown-content a:hover {
            background-color: white;
        }
        .n-menu ul li:hover .dropdown-content {
            display: none;
        }
    </style>
</head>
<body>
    <nav class="n-menu">
        <ul>
       
            <?php if (!isset($_SESSION["email"])) { ?>
                <li><a href="login.php" id="giris">Giriş</a></li>
                <li><a href="kayit.php" id="kayit">Kayıt Ol</a></li>
            <?php } else { ?>
                <li>
                    <a href="#" id="user">Sayın <?php echo $_SESSION["ad"] . " " . $_SESSION["soyad"]; ?> </a>
                    <div class="dropdown-content">
                        <a href="sifredegistir.php" id="sifredegistir">Şifre Değiştir</a>
                        <a href="bizkimiz.php" id="bizkimiz">Bilgilerim</a>
                        <a href="cikis.php">Güvenli Çıkış</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </nav>
</body>
</html>
