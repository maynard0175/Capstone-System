<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../assets/icon/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar container-fluid w-100 navbar-expand-lg dashboard-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DASHBOARD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">PROFILE</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">GRADES</a>
                </li>
                <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Link
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="#">REGISTRATION</a>
                </li>
            </ul>
            <form class="d-flex align-items-center justify-content-center">
                <div class="dashboard-icon my-auto my-auto me-3">
                    <i class="bi bi-bell-fill"></i>
                </div>
                <div class="user-info d-flex align-items-center justify-content-center my-auto">
                    <div class="dashboard-icon my-auto me-2">
                        <div class="dropdown">
                                <i class="bi bi-person-circle profile-user-icon" data-bs-toggle="dropdown" aria-expanded="false" ></i>
                            <ul class="dropdown-menu">
                                <li><a href="../../logout.php" class="dropdown-item text-danger">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="my-auto fw-semibold">MAYNARD BIHASA</p>
                </div>

            </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-3 px-5 profile-body">
        <div class="row">
            <div class="col-md-5">
                <div class="container bg-white px-2 py-4 profile-info-left">
                    <div class="text-center">
                        <img src="../../assets/img/default-user-icon.png" alt="" class="logo">
                    </div>
                    <h5 class="text-center">Maynard Bihasa</h5>
                    <h6 class="text-secondary text-center">22-01-0694</h6>
                    <h5 class="text-secondary text-center">BSIT-AP-3</h5>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Status:</p>
                        <span>Not Defined</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Birthdate:</p>
                        <span>January 1, 2001</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Mobile No.</p>
                        <span>09221234567</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold">Email</p>
                        <span>juandelacruz@gmail.com</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Birthplace</p>
                        <span>Silang, Cavite</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Sex</p>
                        <span>Male</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Civil Status</p>
                        <span>Single</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Current Address</p>
                        <span>N/A</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Permanent Address</p>
                        <span>N/A</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Nationality</p>
                        <span>Filipino</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Religion</p>
                        <span>Roman Catholic</span>
                    </div>
                    <hr>
                    <div class="d-flex align-content-between justify-content-between py-0 my-0">
                        <p class="fw-semibold my-0 py-0">Dialect</p>
                        <span>Tagalog</span>
                    </div>
                    <hr>
                    <div class="text-center my-0 py-0">
                        <a href="" class="btn btn-primary p-2 my-0 profile-edit-btn">EDIT[1]</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="container bg-white p-3 mt-md-2 mt-4 profile-info-right-top">
                    <div class="d-flex align-content-between justify-content-between">
                        <p class="text-start fw-semibold">Other Important Information</p>
                        <a href="" class="btn btn-primary p-2 my-0 profile-edit-btn">EDIT[2]</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Father's Name:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Father's Occupation:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Mother's Name:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Mother's Occupation:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Guardian's Name:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Guardian's Occupation:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Living with a Family?</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 mb-0 mt-2">
                                <p class="py-0 my-0">Are you a differently abled person?</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 mb-0">
                                <p class="ms-4 my-auto">If yes, please specify</p>
                                <input type="text" class="profile-info-right-input my-auto">
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 mb-0 mt-2">
                                <p class="py-0 mb-0">Do you belong to a cultural minority group?</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 mb-0">
                                <p class="ms-4 my-auto">If yes, please specify</p>
                                <input type="text" class="profile-info-right-input my-auto">
                            </div>
                            <p class="fw-semibold mt-4 mb-0">In case of emergency:</p>
                            <p class="my-0 py-0">Contact Name:</p>
                            <p class="fw-semibold ms-3 my-0 py-0">N/A</p>
                            <p class="my-0 py-0">Contact Email:</p>
                            <p class="fw-semibold ms-3 my-0 py-0">N/A</p>
                            <p class="my-0 py-0">Contact Address:</p>
                            <p class="fw-semibold ms-3 my-0 py-0">N/A</p>
                        </div>
                    </div>
                </div>
                <div class="container bg-white p-3 mt-md-2 mt-4 profile-info-right-bottom">
                    <div class="d-flex align-content-between justify-content-between">
                        <p class="text-start fw-semibold">Educational Background</p>
                        <a href="" class="btn btn-primary p-2 my-0 profile-edit-btn">EDIT[3]</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Elementary:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="ms-3 py-0 my-0">Year Graduated:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Senior High School/Secondary:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="ms-3 py-0 my-0">Year Graduated:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="py-0 my-0">Collegiate:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            <div class="d-flex align-content-between justify-content-between py-0 my-0">
                                <p class="ms-3 py-0 my-0">Year Graduated:</p>
                                <span class="fw-semibold">N/A</span>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <script>
        function logout() {
            Swal.fire({
                title: "Are you sure?",
                text: "You will be logged out",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, logout!",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../../logout.php";
                }
            });
        }
    </script>
    <script src="../../assets/sweetalert/sweetalert2@11.js"></script> -->
</body>
</html>