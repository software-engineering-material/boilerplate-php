<?php
require_once "./db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="styles/index.style.css">
</head>

<body>
   <div class="container">
      <div class="content-section">
         <div class="title-section">
            <div>
               <h2>Employee data management</h2>
               <p style="font-style:italic; font-size:smaller">Instructor : Andrea Suryatanaya</p>
               <a href="create.php" class="btn-add">Add Employee</a>
            </div>
            <img src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png" alt="haltev" class="avatar">
         </div>
         <div></div>
         <div class="data-table">
            <table>
               <tr class="title-table">
                  <th>No</th>
                  <th>Name</th>
                  <th>NIK</th>
                  <th>Address</th>
                  <th>Photo</th>
                  <th>Actions</th>
               </tr>

               <tr>
                  <td data-label="No">1</td>
                  <td data-label="Name">John Doe</td>
                  <td data-label="NIK">1234567890</td>
                  <td data-label="Address">123 Main St, City, Country</td>
                  <td data-label="Photo">
                     <img src="https://haltev.id/wp-content/uploads/2021/05/Logo-Haltev-Transparan-1.png" alt="Photo" class="image-url">
                  </td>
                  <td data-label="Actions">
                     <div class="action-buttons">
                        <a href="update.php?id=1" class="btn-action btn-edit">Edit</a>
                        <button type="button" class="btn-action btn-delete">Delete</button>
                     </div>
                  </td>
               </tr>


            </table>
         </div>
      </div>
   </div>
</body>

</html>