<?php
require_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Employee</title>
   <link rel="stylesheet" href="styles/index.style.css">
   <link rel="stylesheet" href="styles/create.style.css">
</head>

<body>

   <div class="container">
      <div class="content-section">

         <div class="title-section">
            <div>
               <h2>Update Employee</h2>
               <p style="text-decoration: underline; font-style: italic;">
                  Edit employee data
               </p>
            </div>

            <img
               src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png"
               alt="Haltev"
               class="avatar">
         </div>

         <form action="" method="POST" class="employee-form">

            <!-- TODO: isi value dengan id dari query string / database -->
            <input type="hidden" name="id" value="1">

            <div class="form-group">
               <label for="name">Employee Name</label>
               <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Enter employee name"
                  value="John Doe"
                  required>
            </div>

            <div class="form-group">
               <label for="nik">NIK</label>
               <input
                  type="text"
                  id="nik"
                  name="nik"
                  placeholder="Enter employee NIK"
                  value="1234567890"
                  required>
            </div>

            <div class="form-group">
               <label for="address">Address</label>
               <textarea
                  id="address"
                  name="address"
                  placeholder="Enter employee address"
                  rows="4"
                  required>123 Main St, City, Country</textarea>
            </div>

            <div class="form-group">
               <label for="image_url">Photo URL</label>
               <input
                  type="url"
                  id="image_url"
                  name="image_url"
                  placeholder="https://example.com/photo.jpg"
                  value="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png">
               <img
                  src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png"
                  alt="Current photo"
                  class="image-url"
                  style="margin-top: 8px;">
            </div>

            <div class="form-actions">
               <a href="index.php" class="btn-cancel">Cancel</a>
               <button type="submit" class="btn-submit">Update Employee</button>
            </div>

         </form>

         <div class="footer-section">
            <p>Instructor : Andrea Suryatanaya</p>
         </div>

      </div>
   </div>

</body>

</html>
