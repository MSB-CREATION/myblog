<?php 
include("../../app/controllers/users.php"); ?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin - Create Admin User</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="../posts/index.php">Manage Posts</a></li>
        <li><a href="../topics/index.php">Manage Topics</a></li>
        <li><a href="../users/index.php">Manage Users</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add User</a>
        <a href="index.php" class="btn btn-sm">Manage Users</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Edit User</h2>

        <?php include("../../app/helper/formErrors.php"); ?>

        <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
          <!-- <div class="msg error">
            <li>Username required</li>
          </div> -->
          <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
          </div>
          <div class="input-group">
          <?php if(isset($admin) && $admin == 1): ?>
          <label>
          <input type="checkbox" name="admin" checked>
            Admin?</label>
          <?php else: ?>
            <input type="checkbox" name="admin">
          </div>
          <?php endif; ?>
          <div class="input-group">
            <button type="submit" name="update-user" class="btn">Save User</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

  <!-- Custome Scripts -->
  <script src="../../assets/css/scripts.js"></script>

</body>

</html>