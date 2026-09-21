<!DOCTYPE html>
<html>
<head>
  <title>Register - Benhur Murikipudi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-teal">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="regMurikipudi.php" class="w3-bar-item w3-button w3-light-grey">Register</a>
  <a href="contactUsMurikipudi.php" class="w3-bar-item w3-button">Contact Us</a>
  <a href="courseReflectMurikipudi.php" class="w3-bar-item w3-button">Course Reflection</a>
  <a href="cyberApplied1.php" class="w3-bar-item w3-button">Hash Demo</a>
  <a href="cyberApplied2.php" class="w3-bar-item w3-button">Encrypt/Decrypt</a>
  <a href="CyberInfor.php" class="w3-bar-item w3-button">Cyber Topic</a>
</div>

<!-- Form Container -->
<div class="w3-container w3-white w3-card-4 w3-padding-32 w3-margin-top" style="max-width:700px;margin:auto;">
  <h2 class="w3-text-teal">Mailing List Registration</h2>

  <form method="POST" action="">
    <label>First Name *</label>
    <input class="w3-input w3-border" type="text" name="firstName" required>

    <label>Last Name *</label>
    <input class="w3-input w3-border" type="text" name="lastName" required>

    <label>Birthday *</label>
    <input class="w3-input w3-border" type="date" name="birthday" required>

    <label>Email *</label>
    <input class="w3-input w3-border" type="email" name="email" required>

    <br>
    <button class="w3-button w3-teal" type="submit">Register</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Sanitize and display input
      function clean_input($data) {
          return htmlspecialchars(stripslashes(trim($data)));
      }

      $firstName = clean_input($_POST["firstName"]);
      $lastName = clean_input($_POST["lastName"]);
      $birthday = clean_input($_POST["birthday"]);
      $email = clean_input($_POST["email"]);

      echo "<div class='w3-panel w3-pale-green w3-leftbar w3-border-green w3-margin-top'>
              <h3>Registration Successful!</h3>
              <p><strong>First Name:</strong> $firstName</p>
              <p><strong>Last Name:</strong> $lastName</p>
              <p><strong>Birthday:</strong> $birthday</p>
              <p><strong>Email:</strong> $email</p>
            </div>";
  }
  ?>
</div>

</body>
</html>
