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
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      text-align: center;
      padding-top: 40px;
      color: #ffffff;
    }
    .box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      width: 90%;
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      color: #ffffff;
    }
    button {
      padding: 10px 20px;
      background: #ffb300;
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.2s;
    }
    button:hover {
      background: #ffcc33;
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
