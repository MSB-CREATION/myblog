<?php include("../../app/controllers/posts.php");?>


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

  <title>Admin - Create Post</title>
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
        <li><a href="index.php">Manage Posts</a></li>
        <li><a href="../topics/index.php">Manage Topics</a></li>
        <li><a href="../users/index.php">Manage Users</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Post</a>
        <a href="index.php" class="btn btn-sm">Manage Posts</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Create Post</h2>
        <?php include("../../app/helper/formErrors.php"); ?>

        <form action="create.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Body</label>
            <textarea class="text-input" name="body"  id="body"><?php echo $body ?></textarea>
          </div>
          <div>
            <label>image</label>
            <input type="file" class="text-input" name="image" ></input>
          </div>
          <div class="input-group">
            <label>Topic</label>
            <select class="text-input" name="topic_id">
              <option value=""></option>
              <?php foreach ($topics as $key => $topic): ?>

              <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
              <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
              <?php else: ?>
              <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
              <?php endif; ?>
              
              <?php endforeach; ?>
             
            </select>
          </div>
          <div class="input-group">
          <?php if (empty($published)): ?>
            <label>
              <input type="checkbox" name="published" /> Publish
            </label>
            <?php else: ?>
              <label>
              <input type="checkbox" name="published" checked /> Publish
            </label>
          </div>
          <?php endif; ?>
          <div class="input-group">
            <button type="submit" name="add-post" class="btn">Save Post</button>
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