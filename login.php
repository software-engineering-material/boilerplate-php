<?php
require_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="styles/index.style.css">
   <link rel="stylesheet" href="styles/create.style.css">
   <link rel="stylesheet" href="styles/auth.style.css">
</head>

<body>

   <div class="container">
      <div class="content-section auth-card">

         <div class="title-section">
            <div>
               <h2>Welcome Back</h2>
               <p style="text-decoration: underline; font-style: italic;">
                  Login to your account
               </p>
            </div>

            <img
               src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png"
               alt="Haltev"
               class="avatar">
         </div>

         <!-- TODO: tampilkan pesan error login di sini
         <div class="alert alert-error">Invalid email or password.</div>
         -->

         <form action="" method="POST" class="employee-form auth-form">

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
                  placeholder="Enter your password"
                  required>
            </div>

            <div class="form-actions">
               <button type="submit" class="btn-submit">Login</button>
            </div>

         </form>

         <p class="auth-switch">
            Don't have an account? <a href="register.php">Register</a>
         </p>

         <div class="footer-section">
            <p>Instructor : Andrea Suryatanaya</p>
         </div>

      </div>
   </div>

</body>

</html>
