<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Benhur Murikipudi</title>
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
  <a href="contactUsMurikipudi.php" class="w3-bar-item w3-button w3-light-grey">Contact Us</a>
  <a href="courseReflectMurikipudi.php" class="w3-bar-item w3-button">Course Reflection</a>
  <a href="cyberApplied1.php" class="w3-bar-item w3-button">Hash Demo</a>
  <a href="cyberApplied2.php" class="w3-bar-item w3-button">Encrypt/Decrypt</a>
  <a href="CyberInfor.php" class="w3-bar-item w3-button">Cyber Topic</a>
</div>

<div class="w3-container w3-padding-32 w3-white w3-card-4 w3-margin-top" style="max-width:600px;margin:auto;">
  <h2 class="w3-text-teal">Contact Us</h2>

  <form method="GET" action="">
    <label>First Name *</label>
    <input class="w3-input w3-border" type="text" name="firstName" required>

    <label>Last Name *</label>
    <input class="w3-input w3-border" type="text" name="lastName" required>

    <label>Email *</label>
    <input class="w3-input w3-border" type="email" name="email" required>

    <label>Message *</label>
    <textarea class="w3-input w3-border" name="message" required></textarea>

    <br>
    <button class="w3-button w3-teal" type="submit">Send Message</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["firstName"])) {
      // Sanitize function
      function clean_input($data) {
          return htmlspecialchars(stripslashes(trim($data)));
      }

      $firstName = clean_input($_GET["firstName"]);
      $lastName = clean_input($_GET["lastName"]);
      $email = clean_input($_GET["email"]);
      $message = clean_input($_GET["message"]);

      echo "<div class='w3-panel w3-green w3-margin-top'>
              <h3>Thank you for contacting us!</h3>
              <p><strong>First Name:</strong> $firstName</p>
              <p><strong>Last Name:</strong> $lastName</p>
              <p><strong>Email:</strong> $email</p>
              <p><strong>Message:</strong><br>$message</p>
            </div>";
  }
  ?>
</div>

</body>
</html>
