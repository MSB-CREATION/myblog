<?php include("../../app/controllers/posts.php"); ?>

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

  <title>Admin - Manage Posts</title>
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
        <li><a href="../../assets/css/index.php">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            More
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <!-- <li><a href="#">Dashboard</a></li> -->
            <li><a href="../../logout.php" class="logout">logout</a></li>
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
        <h2 style="text-align: center;">Manage Posts</h2>
        <?php include("../../app/includes/messages.php"); ?>
        <table>
          <thead>
            <th>N</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
               
               <?php foreach ($posts as $key => $post): ?>

            <tr class="rec">
              <td><?php echo $key + 1; ?></td>
              <td>
                <a href="#"><?php echo $post['title']; ?></a>
              </td>
              <td>Awa</td>
              <td>
                <a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">
                  Delete
                </a>
              </td>

              <?php if ($post['published']): ?>
              <td>
                <a href="edit.php?published=0&p_id=<?php echo $_POST['id'] ?>" class="unpublish">
                  Unpublish
                </a>
              </td>
            </tr>
            <?php else: ?>
              <td>
                <a href="edit.php?published=1&p_id=<?php echo $_POST['id'] ?>" class="publish">
                  Publish
                </a>
              </td>
            <?php endif; ?>
           <?php endforeach; ?>
           
            
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../../assets/css/scripts.js"></script>

</body>

</html>