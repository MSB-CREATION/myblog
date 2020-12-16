<?php
 include("app/database/db.php");
include("app/includes/header.php");
include("app/includes/sidebar.php"); 
include("app/includes/topbar.php");

$posts = selectAll('posts', ['published' => 1])
  ?>


   

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php if (isset($_SESSION['id'])): ?>
          <?php  else:  ?>

               <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>You are no longer login user please <a href="login.php">login now.</a></strong>
                      <?php  endif;  ?>
                 </div></div>
        <div class="container-fluid">

        <?php include("app/includes/messages.php"); ?>

       

          <!-- Page Heading -->
          
          <?php if (isset($_SESSION['id'])): ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Welcome, <?php echo $_SESSION['username']; ?></h1>
          </div>

          <?php  else:  ?>
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800"><a href="login.php" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Login</a>
                      <a href="register.php" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Sign Up</a>
                      </div>
          <?php  endif;  ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/img/wel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/wel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/wel3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><br>

          <!-- Content Row -->
          <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Apps (Cracked)</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">90% Working</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-application fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Games (Mod)</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">95% Working</div>
                  </div>
  
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-gamepad fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Tasks Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Trusted Projects</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">99%</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Pending Requests Card Example -->
      <!-- Tasks Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-black text-uppercase mb-1">Total Free</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100%</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-tick fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <br>

  <!-- /.container-fluid -->

      
  <div class="card-deck" id="games">


    <?php foreach ($posts as $post): ?>
    <div class="col-md-4">
    <div class="card">
      <img class="card-img-top" src="<?php echo 'assets/img' . $post['image']; ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['title']; ?></h5>
        <p class="card-text"><?php echo $post['body']; ?></p><br>
        <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
      </div>
    </div>
    </div>
<?php endforeach; ?>


  </div>
  <br><br>



<!-- 55555555555555555555555555555555555555555555555555555555555555555555555555555555 -->

<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    
  </ol>

  <div class="carousel-inner" role="listbox">

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">Carousel cards title </h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                
                    <div class="carousel-item active">
                      
                        <div class="row">
                         <?php foreach ($posts as $post): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="<?php echo 'assets/img' . $post['image']; ?>" /> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $post['title']; ?></h4>
                                        <p class="card-text"><?php echo $post['body']; ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
                                        <a href="#" class="btn btn-primary">Button</a>
                                    </div>

                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                        
                    </div>
                    
                    <div class="carousel-item">
                        <div class="row">
                          <?php foreach ($posts as $post): ?>
                          <div class="col-md-4">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="<?php echo 'assets/img' . $post['image']; ?>" /> 
                                  <div class="card-body">
                                      <h4 class="card-title"><?php echo $post['title']; ?></h4>
                                      <p class="card-text"><?php echo $post['body']; ?></p>
                                      <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
                                      <a href="#" class="btn btn-primary">Button</a>
                                  </div>

                              </div>
                          </div>
                        <?php endforeach; ?>
                          

                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
    </div>
</div>
</section>
    </div>

<!-- dfsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


<br>

<!-- Swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div><br>


<br>
<!-- <div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    <div class="swiper-slide"> <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap"></div>
    
  </div>

  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<p class="append-buttons">
  <a href="#" class="prepend-2-slides">Prepend 2 Slides</a>
  <a href="#" class="prepend-slide">Prepend Slide</a>
  <a href="#" class="append-slide">Append Slide</a>
  <a href="#" class="append-2-slides">Append 2 Slides</a>
</p> -->


<br>



                             
      
  <?php if (isset($_SESSION['id'])): ?>
    <center><a type="button" href="http://www.msb.epizy.com" class="btn btn-primary btn-block">
    More
  </a></center> 
          <?php  else:  ?>
  <center><button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modal1">
    More
  </button></center>
<?php endif; ?>



  <br>
  <br>
  <div class="card-deck" id="games">
    <div class="card">
      <img class="card-img-top" src="assets/img/cod.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Call Of Duty (Mod)</h5>
        <p class="card-text">100% Working Call Of Duty Mod Apk. Download And Enjoy.</p><br>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
    
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/pubg.jpeg" alt="Card image cap"><br>
      <div class="card-body"><br>
        <h5 class="card-title">Pubg Mod (100% latest Working Mod)</h5>
        <p class="card-text">Pubg Mod Apk 100% Working. Use Dulicate Account. Download And Enjoy.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
  
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/amongus.jpg" alt="Card image cap">
      <div class="card-body"><br>
        <h5 class="card-title">Among Us Mod Apk</h5>
        <p class="card-text">100% Working Fantastic Mod Menu Features Among Us Apk. Try,Download And Enjoy.</p><br>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
       
      </div>
    </div>
  </div>
  <br> <br>
  
  

  <center><button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modal1">
    More
  </button></center>
  
  

  <br><br> 
  <div class="card-deck" id="apps">
    <div class="card">
      <img class="card-img-top" src="assets/img/kin.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Kinemaster Mod Apk</h5>
        <p class="card-text">100% Working Mod. Download And Enjoy.</p><br><br>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
        
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/gcam2.webp" alt="Card image cap"><br>
      <div class="card-body"><br>
        <h5 class="card-title">Google Camera<br>For All Mobiles.</h5>
        <p class="card-text">Download 100% Perfect Working Gcam For All Mobile Phones. Download And Enjoy.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
       
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/picsartg.jpeg" alt="Card image cap">
      <div class="card-body"><br>
        <h5 class="card-title">Picsart Gold Mod Apk</h5>
        <p class="card-text">100% Working Mod Apk. Download And Enjoy.</p><br>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a  class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#modal1">
          Download
        </a>
      
      </div>
    </div>
  </div>
  <br><br>


  
  <center><button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modal1">
    More
  </button></center>
 
 
  <br>

  
               

              <!-- Color System -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light text-black shadow">
                    <div class="card-body">
                      Light
                      <div class="text-black-50 small">#f8f9fc</div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body">
                      Dark
                      <div class="text-white-50 small">#5a5c69</div>
                  </div>
                </div>
              </div>
            </div>

            
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



<?php include("app/includes/footer.php") ?>
<?php include("app/includes/script.php") ?>

  