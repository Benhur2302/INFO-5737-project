<!DOCTYPE html>
<html>
<head>
  <title>Encrypt & Decrypt - Benhur Murikipudi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-teal">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="regMurikipudi.php" class="w3-bar-item w3-button">Register</a>
  <a href="contactUsMurikipudi.php" class="w3-bar-item w3-button">Contact Us</a>
  <a href="courseReflectMurikipudi.php" class="w3-bar-item w3-button">Course Reflection</a>
  <a href="cyberApplied1.php" class="w3-bar-item w3-button">Hash Demo</a>
  <a href="cyberApplied2.php" class="w3-bar-item w3-button w3-light-grey">Encrypt/Decrypt</a>
  <a href="CyberInfor.php" class="w3-bar-item w3-button">Cyber Topic</a>
</div>

<div class="w3-container w3-white w3-card-4 w3-margin-top w3-padding-32" style="max-width:800px;margin:auto;">
  <h2 class="w3-text-teal">PHP Encryption and Decryption (Split Forms)</h2>

  <?php
  // 🔐 Fixed Key and IV (for demonstration purposes only)
  $key = '12345678901234567890123456789012'; // 32 bytes (256-bit)
  $iv = '1234567890123456'; // 16 bytes (128-bit)
  ?>

  <!-- ENCRYPTION FORM -->
  <h3>Encrypt Text</h3>
  <form method="POST">
    <input type="hidden" name="action" value="encrypt">
    <label>Enter text to encrypt:</label>
    <input class="w3-input w3-border" type="text" name="plainText" required>
    <br>
    <button class="w3-button w3-teal" type="submit">Encrypt</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "encrypt") {
      $plainText = htmlspecialchars(trim($_POST["plainText"]));
      $encryptedText = openssl_encrypt($plainText, "aes-256-cbc", $key, 0, $iv);

      echo "<div class='w3-panel w3-pale-green w3-leftbar w3-border-green w3-margin-top'>
              <p><strong>Original Text:</strong> $plainText</p>
              <p><strong>Encrypted Text:</strong><br><code>$encryptedText</code></p>
            </div>";
  }
  ?>

  <hr>

  <!-- DECRYPTION FORM -->
  <h3>Decrypt Text</h3>
  <form method="POST">
    <input type="hidden" name="action" value="decrypt">
    <label>Enter text to decrypt (must be a valid encrypted string):</label>
    <input class="w3-input w3-border" type="text" name="cipherText" required>
    <br>
    <button class="w3-button w3-teal" type="submit">Decrypt</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "decrypt") {
      $cipherText = htmlspecialchars(trim($_POST["cipherText"]));
      $decryptedText = openssl_decrypt($cipherText, "aes-256-cbc", $key, 0, $iv);

      echo "<div class='w3-panel w3-pale-blue w3-leftbar w3-border-blue w3-margin-top'>
              <p><strong>Encrypted Input:</strong> $cipherText</p>
              <p><strong>Decrypted Output:</strong><br><code>$decryptedText</code></p>
            </div>";
  }
  ?>
</div>

</body>
</html>
