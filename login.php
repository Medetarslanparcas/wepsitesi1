<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <script>
function deneme(){
  var deger1=  document.getElementById('email').value;
var deger2=document.getElementById('sifr').value;

if(deger1==="FENERBAHCE@gmail"&& deger2==='1907fb'){
  window.location.href="admin.php";
}

}



    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .menu {
            
            color: #fff;
            padding: 10px;
            text-align: center;
            height: 50px; /* Sabit yükseklik */
            line-height: 30px; /* Dikey hizalama */
        }

        .modal-login {
            width: 350px;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }

        .modal-login .modal-header {
            background: #f2f2f2;
            padding: 20px 15px;
            text-align: center;
            border-bottom: none;
        }

        .modal-login .modal-header h4 {
            font-size: 26px;
            margin: 0;
            font-weight: bold;
            color: #333;
        }

        .modal-login .modal-body {
            padding: 20px;
        }

        .modal-login .form-group {
            margin-bottom: 20px;
        }

        .modal-login label {
            font-size: 14px;
            color: #666;
            font-weight: normal;
        }

        .modal-login .form-control {
            min-height: 38px;
            border-radius: 2px;
            border: 1px solid #ddd;
            font-size: 14px;
            padding: 10px;
            box-sizing: border-box;
            width: 100%;
        }

        .modal-login .btn {
            min-height: 38px;
            border-radius: 2px;
            background: #3498db;
            border: none;
            line-height: normal;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            transition: background 0.3s ease;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .modal-login .btn:hover, .modal-login .btn:focus {
            background: #248bd0;
        }

        .modal-login .hint-text {
            text-align: center;
            font-size: 13px;
            margin-top: 15px;
        }

        .modal-login .hint-text a {
            color: #3498db;
            text-decoration: none;
        }

        .modal-login .hint-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   

    <!-- Giriş Formu -->
    <div class="modal-login">
        <div class="modal-header">
            <h4 style="color:orange;">Giriş</h4>
        </div>
        <div class="modal-body">
            <form action="giris.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sifr">Şifre</label>
                    <input type="password" name="sifr" id="sifr" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" onclick="deneme()" value="Giriş" style="background-color:orange;">
                </div>
            </form>
            <div class="hint-text">Henüz bir hesabınız yok mu? <a href="kayit.php" style="color:orange;">Kayıt Ol</a></div>
        </div>
    </div>

 
</body>
</html>
