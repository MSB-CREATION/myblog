<?php 
include("../../app/controllers/topics.php"); ?> 

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

  <title>Admin - Manage Topics</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
    <a href="index.php">
        <h1 class="logo-text"><span>Tutorial</span>Hub</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
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
        <li><a href="../posts/index.php">Manage Posts</a></li>
        <li><a href="index.php">Manage Topics</a></li>
        <li><a href="../users/index.php">Manage Admins</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Topic</a>
        <a href="index.php" class="btn btn-sm">Manage Topics</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Manage Topic</h2>
        <?php include("../../app/includes/messages.php"); ?>
        <table>
          <thead>
            <th>No.</th>
            <th>Name</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>

          <?php foreach ((array)$topics as $key => $topic): ?>
                           <tr class="rec">
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $topic['name']; ?></td>
                            <td>
                              <a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">
                                Edit
                              </a>
                            </td>
                            <td>
                              <a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">
                                Delete
                              </a>
                            </td>
                          </tr>
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