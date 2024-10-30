<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #333;
            overflow: hidden;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
    </style>
       <p style="float=left;" > <?php echo "Sayın ".$_SESSION["ad"]." ".$_SESSION["soyad"]." Hoşgeldiniz" ?> </p> 
</head>
<body>
  
</body>
</html>
