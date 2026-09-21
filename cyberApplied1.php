<!DOCTYPE html>
<html>
<head>
  <title>Hash Generator - Benhur Murikipudi</title>
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
  <a href="cyberApplied1.php" class="w3-bar-item w3-button w3-light-grey">Hash Demo</a>
  <a href="cyberApplied2.php" class="w3-bar-item w3-button">Encrypt/Decrypt</a>
  <a href="CyberInfor.php" class="w3-bar-item w3-button">Cyber Topic</a>
</div>

<div class="w3-container w3-white w3-card-4 w3-margin-top w3-padding-32" style="max-width:700px;margin:auto;">
  <h2 class="w3-text-teal">Secure Hash Generator (SHA-256)</h2>

  <form method="POST">
    <label>Enter Text:</label>
    <input class="w3-input w3-border" type="text" name="plainText" required>
    <br>
    <button class="w3-button w3-teal" type="submit">Generate Hash</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $input = htmlspecialchars(trim($_POST["plainText"]));
      $hashValue = hash("sha256", $input); // Secure one-way hash
      echo "<div class='w3-panel w3-pale-green w3-leftbar w3-border-green w3-margin-top'>
              <p><strong>Input:</strong> $input</p>
              <p><strong>SHA-256 Hash:</strong><br><code>$hashValue</code></p>
            </div>";
  }
  ?>
</div>

</body>
</html>
