<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register/Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="toggle-buttons">
      <button class="toggle-btn active" id="registerBtn">Register</button>
      <button class="toggle-btn" id="loginBtn">Login</button>
    </div>

    <form id="registerForm" class="form">
      <div class="social-buttons">
        <button type="button" class="social-btn">
          <img src="img/google.svg" alt="Google"> 
        </button>
        <button type="button" class="social-btn">
          <img src="img/apple.svg" alt="Apple"> 
        </button>
        <button type="button" class="social-btn">
          <img src="img/facebook.svg" alt="Facebook"> 
        </button>
      </div>

      <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>

      <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="password">Password*</label>
        <input type="password" id="password" name="password" placeholder="Create a password" minlength="8" required>
        <small>Must be at least 8 characters.</small>
      </div>

      <button type="submit" class="submit-btn">Get started</button>
    </form>
    <p class="terms">By continuing you agree to our <a href="#">Terms & Conditions</a></p>
  </div>

  <script src="script.js"></script>
</body>
</html>
