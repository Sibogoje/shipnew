  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="https://new.shippii.online/super/dash.php" class="logo d-flex align-items-center">
        <!--img src="icon.png" alt=""-->
        <span class="d-none d-lg-block">Shippii</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"><?php echo "0" ?></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have n new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Header</h4>
                <p>Notification</p>
                <p>Time</p>
              </div>
            </li>

 




            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number"><?php echo "0" ?></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have n new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
 


            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://new.shippii.online/super/icon.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  
  
    <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="https://new.shippii.online/super/dash.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#shipstar-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-menu-button-wide"></i><span>Shipstar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="shipstar-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://new.shippii.online/super/shipstar/index.php">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
             <a href="https://new.shippii.online/super/shipstar/new.php">
              <i class="bi bi-circle"></i><span>New Orders</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/shipstar/assigned.php">
              <i class="bi bi-circle"></i><span>Assigned To</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/shipstar/arrived.php">
              <i class="bi bi-circle"></i><span>Checked Into Locker</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/shipstar/history.php">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->



<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-menu-button-wide"></i><span>Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="bookings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://new.shippii.online/super/warehouse/index.php">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
             <a href="https://new.shippii.online/super/warehouse/new.php">
              <i class="bi bi-circle"></i><span>Requested</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/warehouse/ready.php">
              <i class="bi bi-circle"></i><span>Ready For Processing</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/warehouse/checked.php">
              <i class="bi bi-circle"></i><span>Checked Into Locker</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/warehouse/all.php">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->




 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#warehouse-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-menu-button-wide"></i><span>Warehouse</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="warehouse-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://new.shippii.online/super/warehouse/index.php">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
             <a href="https://new.shippii.online/super/warehouse/new.php">
              <i class="bi bi-circle"></i><span>New Orders</span>
            </a>
          </li>
          
          
          <li>
            <a href="https://new.shippii.online/super/warehouse/checked.php">
              <i class="bi bi-circle"></i><span>Checked Into Locker</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/warehouse/history.php">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#locker-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-menu-button-wide"></i><span>Locker</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="locker-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://new.shippii.online/super/locker/index.php">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
             <a href="https://new.shippii.online/super/locker/new.php">
              <i class="bi bi-circle"></i><span>New Orders</span>
            </a>
          </li>
		      <li>
            <a href="https://new.shippii.online/super/locker/wait.php">
              <i class="bi bi-circle"></i><span>Wait</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/collect.php">
              <i class="bi bi-circle"></i><span>Collect</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/deliver.php">
              <i class="bi bi-circle"></i><span>Deliver</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/transit.php">
              <i class="bi bi-circle"></i><span>In Transit</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/sa.php">
              <i class="bi bi-circle"></i><span>Shippii SA</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/botswana.php">
              <i class="bi bi-circle"></i><span>BW Depot</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/eswatini.php">
              <i class="bi bi-circle"></i><span>Esw Depot</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/delivered.php">
              <i class="bi bi-circle"></i><span>Delivered</span>
            </a>
          </li>
          <li>
            <a href="https://new.shippii.online/super/locker/driver.php">
              <i class="bi bi-circle"></i><span>Assigned to</span>
            </a>
          </li>
         
		  

        </ul>
      </li><!-- End Components Nav -->



 

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://new.shippii.online/super/files/index.php">
          <i class="bi bi-question-octagon"></i><span>Manage Files </span><i class="bi bi- ms-auto"></i>
        </a>

      </li><!-- End Charts Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="https://new.shippii.online/super/mall/index.php">
          <i class="bi bi-question-octagon"></i><span>Shippii Mall </span><i class="bi bi- ms-auto"></i>
        </a>

      </li><!-- End Charts Nav -->

 <li class="nav-heading">Repots</li>
 
 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
          <i class="ri ri-todo-fill"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          

        </ul>
      </li><!-- End Tables Nav -->
	  
	   <li class="nav-heading">System Settings</li>
 
 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
          <i class="ri ri-tools-fill"></i><span>Configure System Constants</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="https://new.shippii.online/super/config/calculator.php">
              <i class="bi bi-circle"></i><span>Calculator</span>
            </a>
          </li>
		   <li>
           <a href="https://new.shippii.online/super/config/promotions.php">
              <i class="bi bi-circle"></i><span>Promotions</span>
            </a>
          </li>



        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Users Management</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>System Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="https://new.shippii.online/super/users/admin.php">
              <i class="bi bi-circle"></i><span>Admin (SuperUser)</span>
            </a>
          </li>
		   <li>
            <a href="https://new.shippii.online/super/users/clerk.php">
              <i class="bi bi-circle"></i><span>Admin (Clerk)</span>
            </a>
          </li>
		   <li>
            <a href="https://new.shippii.online/super/users/drivers.php">
              <i class="bi bi-circle"></i><span>Drivers</span>
            </a>
          </li>
		   <li>
            <a href="https://new.shippii.online/super/users/customers.php">
              <i class="bi bi-circle"></i><span>Customers</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->
     



    </ul>

  </aside><!-- End Sidebar-->