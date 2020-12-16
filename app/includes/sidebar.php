<style>
.bg-gradient-danger {
    background-color: #000;
    background-image: linear-gradient(180deg,#000 10%,#000 100%);
    background-size: cover;
    }
</style>
 <!-- Sidebar -->
 
 <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
 
    <i class="fas fa-dragon" style="font-size:25px;color:rgb(255, 255, 255);text-shadow:2px 2px 4px #000000;"></i>

  <div class="sidebar-brand-text mx-3">Tutorial <sup>Hub</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{% url 'index' %}">
    <i class="fas fa-home"></i>
    <span>Main Menu</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php if (isset($_SESSION['id'])): ?>
<!-- Heading -->
<div class="sidebar-heading"id="msbhide">
  Menu list
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-mobile"></i>
    <span>Mobile Hub</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="content/of.php">Original Firmwares</a>
      <a class="collapse-item" href="{% url 'rom' %}">Rom</a>
      <a class="collapse-item" href="{% url 'card' %}">Mobile Fix</a>
      <a class="collapse-item" href="{% url 'gcam' %}">Google Camera</a>
      <a class="collapse-item" href="buttons.html">Screen Shots</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-laptop"></i>
    <span>Computer Hub</span>
  </a>
  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Original Firmwares</a>
      <a class="collapse-item" href="cards.html">Rom</a>
      <a class="collapse-item" href="buttons.html">Mobile Fix</a>
      <a class="collapse-item" href="cards.html">Google Camera</a>
      <a class="collapse-item" href="buttons.html">Screen Shots</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-cut"></i>
    <span>Premiere Pro</span>
  </a>
  <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Download</a>
      <h6 class="collapse-header">Effects:</h6>
      <a class="collapse-item" href="cards.html">Transitions</a>
      <a class="collapse-item" href="buttons.html">Luts</a>
      <a class="collapse-item" href="cards.html">Sounds</a>
      <a class="collapse-item" href="buttons.html">Videos</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-angrycreative"></i>
    <span>After Effects</span>
  </a>
  <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Download</a>
      <h6 class="collapse-header">Effects:</h6>
      <a class="collapse-item" href="cards.html">Transitions</a>
      <a class="collapse-item" href="buttons.html">Luts</a>
      <a class="collapse-item" href="cards.html">Sounds</a>
      <a class="collapse-item" href="buttons.html">Videos</a>
      <a class="collapse-item" href="cards.html">Openner</a>
      <a class="collapse-item" href="cards.html">Intro</a>
      <a class="collapse-item" href="buttons.html">Promo</a>
      <a class="collapse-item" href="buttons.html">Projects</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse00" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-cut"></i>
    <span>Light Room</span>
  </a>
  <div id="collapse00" class="collapse" aria-labelledby="heading00" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Download</a>
      <h6 class="collapse-header">Effects:</h6>
      <a class="collapse-item" href="cards.html">Presets</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-android"></i>
    <span>App Development</span>
  </a>
  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Download</a>
      <a class="collapse-item" href="cards.html">Templates</a>
      <a class="collapse-item" href="buttons.html">Projects</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>







<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  App Store
</div>
<!-- Nav Item - Pages Collapse Menu -->

<!-- <li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
<i class="fas fa-fw fa-folder"></i>
<span>Pages</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Login Screens:</h6>
<a class="collapse-item" href="login.html">Login</a>
<a class="collapse-item" href="register.html">Register</a>
<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
<div class="collapse-divider"></div>
<h6 class="collapse-header">Other Pages:</h6>
<a class="collapse-item" href="404.html">404 Page</a>
<a class="collapse-item" href="blank.html">Blank Page</a>
</div>
</div>
</li>
 -->

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-app-store-ios"></i>
    <span>Apps</span>
  </a>
  <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="templates/buttons.html">Android</a>
      <a class="collapse-item" href="cards.html">Ios</a>
      <a class="collapse-item" href="buttons.html">Windows</a>
      <a class="collapse-item" href="cards.html">Linux</a>
      <a class="collapse-item" href="buttons.html">MacOs</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-xbox"></i>
    <span>Games</span>
  </a>

  <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">items:</h6>
      <a class="collapse-item" href="{% url 'androgame' %}">Android</a>
      <a class="collapse-item" href="cards.html">Ios</a>
      <a class="collapse-item" href="buttons.html">Windows</a>
      <a class="collapse-item" href="cards.html">Linux</a>
      <a class="collapse-item" href="buttons.html">MacOs</a>
      <a class="collapse-item" href="cards.html">More</a>
    </div>
  </div>
</li>


<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-image"></i>
    <span>Wallpapers</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>More</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>About Us</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{% url 'contact' %}">
    <i class="fas fa-fw fa-table"></i>
    <span>Contact</span></a>
</li>

<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
User Account
</div>
<li class="nav-item">
<a class="nav-link" href="#" data-toggle="modal" data-target="#profile">
  <i class="fas fa-user"></i>
  <span>Profile</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="{% url 'logout' %}">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  <span>Logout</span></a>
</li>
<?php  else:  ?>
  <li class="nav-item">
<a class="nav-link" href="login.php">
  <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  <span>About Us</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">
  <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  <span>Contact Us</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">
  <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  <span>Login</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="register.php">
  <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  <span>Sign up</span></a>
</li>
<?php  endif;  ?>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<!-- End of Sidebar -->