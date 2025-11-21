<?php
// index.php sederhana
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index PHP Sederhana</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      text-align: center;
      padding-top: 40px;
    }
    .box {
      background: white;
      width: 90%;
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    button {
      padding: 10px 20px;
      background: #4a6cf7;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Halo dari PHP!</h2>
    <p>Hari ini adalah:</p>
    <b>
      <?php echo date('l, d F Y'); ?>
    </b>

    <br><br>
    <button onclick="alert('Halo dari tombol!')">Klik Saya</button>
  </div>
</body>
</html>