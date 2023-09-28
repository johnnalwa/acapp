<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>MATUNDA AC AGENTS SYSTEM</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/logo.png" alt=""></i>matunda ac
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <img src="images/profile.jpg" alt="" class="profile" />
        <h5>welcome agent</h5>
      </div>
      
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Dashboard</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Dashboard</a>
            <a href="addclient.php" class="nav_link sublink" >Add client</a>
            <a href="clients.php" class="nav_link sublink">View clients</a>
            <a href="attendance.php" class="nav_link sublink" >attendance</a>
            <a href="sales.php" class="nav_link sublink">Sales</a>
            <!-- Add similar data-url attributes to other navigation links -->


            
            </ul>
          </li>
        
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          
          
        
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Notice board</span>
            </a>
          
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Setting</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-layer"></i>
              </span>
              <span class="navlink">Features</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="main">
        <h1>Advocate Appointments</h1>
        <div class="appointments">
          <div class="appointment">
            <h2>Meeting With: John Doe</h2>
            <p>Session Starts: 09:00</p>
            <p>Session Title: Children and Related Issues</p>
            <p>Channeling Fee: Kes 2000.00</p>
          </div>
          
          <div class="appointment">
            <h2>Advocate Name: Kaicy O'Brien</h2>
            <p>Advocate Email: kaicybrien@gmail.com</p>
            <p>Session Title: Financial Aid</p>
            <p>Session Starts: 09:00</p>
            <p>Channeling Fee: Kes 2000.00</p>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript -->

    <script src="script.js"></script>

  </body>
</html>
