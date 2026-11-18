<?php
require_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Employee</title>
   <link rel="stylesheet" href="styles/index.style.css">
   <link rel="stylesheet" href="styles/create.style.css">
</head>

<body>

   <div class="container">
      <div class="content-section">

         <div class="title-section">
            <div>
               <h2>Add New Employee</h2>
               <p style="text-decoration: underline; font-style: italic;">
                  Employee registration form
               </p>
            </div>

            <img
               src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png"
               alt="Haltev"
               class="avatar">
         </div>

         <form action="" method="POST" class="employee-form">

            <div class="form-group">
               <label for="name">Employee Name</label>
               <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Enter employee name"
                  required>
            </div>

            <div class="form-group">
               <label for="nik">NIK</label>
               <input
                  type="text"
                  id="nik"
                  name="nik"
                  placeholder="Enter employee NIK"
                  required>
            </div>

            <div class="form-group">
               <label for="address">Address</label>
               <textarea
                  id="address"
                  name="address"
                  placeholder="Enter employee address"
                  rows="4"
                  required></textarea>
            </div>

            <div class="form-group">
               <label for="image_url">Photo URL</label>
               <input
                  type="url"
                  id="image_url"
                  name="image_url"
                  placeholder="https://example.com/photo.jpg">
            </div>

            <div class="form-actions">
               <a href="index.php" class="btn-cancel">Cancel</a>
               <button type="submit" class="btn-submit">Save Employee</button>
            </div>

         </form>

         <div class="footer-section">
            <p>Instructor : Andrea Suryatanaya</p>
         </div>

      </div>
   </div>

</body>

</html>