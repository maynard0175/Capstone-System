<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../assets/css/admin_panel/styles.css" />
    <script src="../../assets/js/admin.js"></script>
    <link rel="stylesheet" href="../../assets/css/admin_panel/resources/boxicons.min.css" />
    <script src="../../assets/css/admin_panel/resources/jquery.min.js"></script>
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css" />
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="ms-5 text-uppercase fw-bolder">Enrollment System Management</div>
        <div class="ms-auto fw-semibold">Info Tech S-Admin</div>
        <div class="header_img ms-2"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar vh-100" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ESM</span> </a>
            <div class="nav_list">
                <a href="index.php" class="nav_link active" id="dashboardLink"> 
                    <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> 
                </a>
                
                <!-- Users Link with Collapsible Submenu -->
                <a href="#userSubmenu" class="nav_link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="userSubmenu">
                    <i class='bx bx-user nav_icon'></i> <span class="nav_name">Sub Admin</span>
                </a>
                <div class="collapse" id="userSubmenu">
                    <ul class="list-unstyled ps-4">
                        <li>
                            <a href="sub-admin/manage-sub-admin.php" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Manage</a>
                        </li>
                        <li>
                            <a href="../../admin_register.php" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i>Add Sub Admin</a>
                        </li>
                        <!-- <li class="">
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> View Users</a>
                        </li> -->
                    </ul>
                </div>

                <!-- Messages Link with Collapsible Submenu -->
                <a href="#messageSubmenu" class="nav_link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="messageSubmenu">
                    <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Registration</span>
                </a>
                <div class="collapse" id="messageSubmenu">
                    <ul class="list-unstyled ps-4">
                        <li>
                            <a href="registration/pending.php" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Pending</a>
                        </li>
                        <li class=""> <!-- Small margin below -->
                            <a href="registration/completed.php" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Completed</a>
                        </li>
                    </ul>
                </div>

                <!-- Bookmark Link with Collapsible Submenu -->
                <a href="#bookmarkSubmenu" class="nav_link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bookmarkSubmenu">
                    <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Student Management</span>
                </a>
                <div class="collapse" id="bookmarkSubmenu">
                    <ul class="list-unstyled ps-4">
                        <li>
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Manage</a>
                        </li>
                        <!-- <li class="">
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> View Bookmarks</a>
                        </li> -->
                    </ul>
                </div>

                <!-- Files Link with Collapsible Submenu -->
                <a href="#fileSubmenu" class="nav_link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="fileSubmenu">
                    <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Class Management</span>
                </a>
                <div class="collapse" id="fileSubmenu">
                    <ul class="list-unstyled ps-4">
                        <li>
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Class</a>
                        </li>
                        <li class=""> <!-- Small margin below -->
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i>Schedule</a>
                        </li>
                    </ul>
                </div>

                <!-- Stats Link with Collapsible Submenu -->
                <a href="#statsSubmenu" class="nav_link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="statsSubmenu">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span>
                </a>
                <div class="collapse" id="statsSubmenu">
                    <ul class="list-unstyled ps-4">
                        <li>
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> View Stats</a>
                        </li>
                        <li class="mb-2"> <!-- Small margin below -->
                            <a href="#" class="nav_link"><i class='bx bx-chevron-right nav_icon'></i> Stat Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="../../logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>


    <!--Container Main start-->
    <div class="mt-5 p-5 container-fluid component-container">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 sub-admin-card">
                        <div class="card-body p-1">
                            <h1 class="card-title fw-bolder ms-3">0</h1>
                            <h5 class="card-text p-1 fw-semibold">Sub Admins</h5>
                            <hr class="my-1">
                            <a href="sub-admin/manage-sub-admin.php" class="btn btn-transparent w-100 fw-semibold py-0 my-0">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 registered-card">
                        <div class="card-body p-1">
                            <h1 class="card-title fw-bolder ms-3">0</h1>
                            <h5 class="card-text p-1 fw-semibold">Registered</h5>
                            <hr class="my-1">
                            <a href="registration/completed.php" class="btn btn-transparent w-100 fw-semibold py-0 my-0">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 registrant-card">
                        <div class="card-body p-1">
                            <h1 class="card-title fw-bolder ms-3">0</h1>
                            <h5 class="card-text p-1 fw-semibold">Number of Registrants</h5>
                            <hr class="my-1">
                            <a href="#" class="btn btn-transparent w-100 fw-semibold my-0 py-0">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 instructor-card">
                        <div class="card-body p-1">
                            <h1 class="card-title fw-bolder ms-3">0</h1>
                            <h5 class="card-text p-1 fw-semibold">Instructors</h5>
                            <hr class="my-1">
                            <a href="#" class="btn btn-transparent w-100 fw-semibold my-0 py-0">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 class-card">
                        <div class="card-body p-1">
                            <h1 class="card-title fw-bolder ms-3">0</h1>
                            <h5 class="card-text p-1 fw-semibold">Classes</h5>
                            <hr class="my-1">
                            <a href="#" class="btn btn-transparent w-100 fw-semibold my-0 py-0">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->

</html>