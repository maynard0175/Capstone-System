<?php
session_start();
if (!isset($_SESSION['user_id'])) {

    header('Location: ../../confirmation.php');
}
if ($_SESSION['role'] != 'student') {
    header('Location: ../admin/index.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <script src="../../assets/tailwind/tailwind.js"></script>
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../assets/icon/bootstrap-icons.min.css">
</head>

<body>
    <!-- <div class="h-screen w-full bg-[#B7C9E2] flex-col flex items-center justify-center">
        <p>Student session started.....</p>
        <button onclick="logout()" class="bg-[#007BFF] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Logout</button>
    </div> -->
    <div class=" vh-100 container-fluid d-flex align-items-center justify-content-center dashboard-container">
        <div class="container">
            <div class="container text-center d-flex align-items-center justify-content-center">
                <img src="../../assets/img/logo.png" alt="" class="img-fluid text-center logo">
            </div>

            <h2 class="text-center my-4">Dashboard Overview</h2>

           <div class="container d-flex align-items-center justify-content-center">
                <div class="container mb-4 d-flex align-items-center justify-content-center profile-container">
                    <a href="../student/profile.php">
                        <div class="container d-flex align-content-between justify-content-between profile-card p-2">
                            <h2 class="my-auto">PROFILE</h2>
                            <div class="icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                    </a>
                </div>
           </div>
           <div class="container d-flex align-items-center justify-content-center">
                <div class="container course-container">
                    <div class="container d-flex align-content-between justify-content-between course-card p-2">
                        <h2 class="my-auto">COURSE</h2>
                        <div class="icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                    </div>
                </div>
           </div>
           <!-- <button onclick="logout()" class="bg-[#007BFF] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Logout</button> -->
            <div class="mt-5 container d-flex align-items-center justify-content-center">
                <img src="../../assets/img/infotech.png" alt="" class="img-fluid infotech-img">
            </div>

        </div>
    </div>

    <script>
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


<script src="../../assets/sweetalert/sweetalert2@11.js"></script>

</body>

</html>