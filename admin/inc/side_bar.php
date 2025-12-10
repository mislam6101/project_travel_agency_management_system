  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p><?php //echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-gear"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li><a href="dashboard.php"> <i class="icon-home"></i> <span>Dashboard</span></a></li>

        <li class="active treeview menu-open"> <a href="#"> <i class="icon-note"></i> <span>Uploads</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="packages.php"><i class="fa fa-angle-right"></i> Packages</a></li>
            <li><a href="ressorts.php"><i class="fa fa-angle-right"></i> Ressorts</a></li>
            <li><a href="gallery.php"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li><a href="blogs.php"><i class="fa fa-angle-right"></i> Blogs</a></li>
          </ul>
        </li>
        <li class="active treeview menu-open"> <a href="#"> <i class="icon-note"></i> <span>List</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="running_packages.php"><i class="fa fa-angle-right"></i> Packages</a></li>
          </ul>
        </li>
         
        </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>