<?php
require_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="styles/index.style.css">
   <link rel="stylesheet" href="styles/create.style.css">
   <link rel="stylesheet" href="styles/auth.style.css">
</head>

<body>

   <div class="container">
      <div class="content-section auth-card">

         <div class="title-section">
            <div>
               <h2>Create Account</h2>
               <p style="text-decoration: underline; font-style: italic;">
                  Register a new account
               </p>
            </div>

            <img
               src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png"
               alt="Haltev"
               class="avatar">
         </div>

         <!-- TODO: tampilkan pesan error register di sini
         <div class="alert alert-error">Email is already registered.</div>
         -->

         <form action="" method="POST" class="employee-form auth-form">

            <div class="form-group">
               <label for="name">Full Name</label>
               <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Enter your full name"
                  required>
            </div>

            <div class="form-group">
               <label for="email">Email</label>
               <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="you@example.com"
                  required>
            </div>

            <div class="form-group">
               <label for="password">Password</label>
               <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Minimum 8 characters"
                  minlength="8"
                  required>
               <small>Use at least 8 characters.</small>
            </div>

            <div class="form-group">
               <label for="confirm_password">Confirm Password</label>
               <input
                  type="password"
                  id="confirm_password"
                  name="confirm_password"
                  placeholder="Repeat your password"
                  minlength="8"
                  required>
            </div>

            <div class="form-actions">
               <button type="submit" class="btn-submit">Register</button>
            </div>

         </form>

         <p class="auth-switch">
            Already have an account? <a href="login.php">Login</a>
         </p>

         <div class="footer-section">
            <p>Instructor : Andrea Suryatanaya</p>
         </div>

      </div>
   </div>

</body>

</html>
