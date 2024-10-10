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
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- <div class="h-screen w-full bg-[#B7C9E2] flex-col flex items-center justify-center">
        <p>Student session started.....</p>
        <button onclick="logout()" class="bg-[#007BFF] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Logout</button>
    </div> -->
    <div class="vh-100 container-fluid d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="container text-center d-flex align-items-center justify-content-center">
                <img src="../../assets/img/logo.png" alt="" class="img-fluid text-center">
            </div>

            <h2 class="text-center mt-2 mb-3 fw-bold">Dashboard Overview</h2>


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