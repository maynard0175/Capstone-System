<?php 
session_start();
if(isset($_SESSION['user_id'])){
    if(isset($_SESSION['role']) == 'student'){
        header('Location: views/student/index.php');
    }
    else if(isset($_SESSION['role']) == 'administrator'){
        header('Location: views/admin/index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/tailwind/tailwind.js"></script>
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-[#B7C9E2] flex items-center justify-center min-h-screen p-4">

    <div class="max-w-sm w-full p-6 flex flex-col items-center justify-center gap-4">

        <img src="./assets/img/logo.png" alt="Profile Picture" class="w-26 h-26 md:w-34 md:h-34 rounded-full object-cover">
        <p class="text-lg md:text-xl font-medium text-center">Select your status</p>
        <a href="login.php?type=student" class="bg-[#007BFF] text-white px-4 py-3 rounded-md text-center text-sm md:text-base w-full">All Students</a>
        <a href="login.php?type=admin" class="bg-[#007BFF] mt-4 text-white px-4 py-3 rounded-md text-center text-sm md:text-base w-full">Administrator</a>

        <a href="index.php" class="text-blue-900 underline"><i class="fas fa-home"></i>
         Home</a>

        <img src="./assets/img/infotech.png" alt="Profile Picture" class="w-24 h-24 md:w-32 md:h-32 mt-5 rounded-full object-cover">

    </div>

</body>

</html>