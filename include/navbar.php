  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">ระบบขายสินค้า</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">




          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item">
                      <a href="dashboard.php" class="nav-link <?php echo ($title == 'หน้าแรก') ? 'active' : '' ?>">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              หน้าแรก
                          </p>
                      </a>
                  </li>
                  <li class="nav-header">จัดการระบบ</li>
                  <li class="nav-item">
                      <a href="manage_category.php" class="nav-link <?php echo ($title == 'ประเภทสินค้า') ? 'active' : '' ?>">
                          <i class="nav-icon fas fa-list"></i>
                          <p>
                              ประเภทสินค้า
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="manage_product.php" class="nav-link <?php echo ($title == 'สินค้า') ? 'active' : '' ?>">
                          <i class="nav-icon fas fa-shopping-cart"></i>
                          <p>
                              สินค้า
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                        <a href="show.php" class="nav-link <?php echo ($title == 'การแสดง') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-eye"></i> <!-- ไอคอน show -->
                            <p>
                                ที่จะต้องจัดส่ง
                        </p>
                        </a>
                    </li>

                  <li class="nav-header">ออกจากระบบ</li>

                  <li class="nav-item">
                      <a href="logout.php" class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>ออกจากระบบ</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>