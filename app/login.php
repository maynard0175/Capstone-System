<?php
session_start();
$type = $_GET['type'];
if ($type !== "student" && $type !== "admin") {
    header('Location: confirmation.php');
}

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
    <title>Login</title>
    <script src="./assets/tailwind/tailwind.js"></script>
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-[#B7C9E2] flex items-center justify-center min-h-screen p-4">

    <div class="max-w-sm w-full  p-6 flex flex-col items-center justify-center gap-4">

        <img src="./assets/img/logo.png" alt="Profile Picture" class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover">
        <p class="text-lg md:text-xl font-medium text-center">Sign in to start your session</p>

        <!-- Login Form -->
        <form id="login-form" method="post" class="w-full flex flex-col gap-4" autocomplete="off">
            <!-- Email Field -->
            <input type="hidden" id="type" name="type" value="<?php echo $type; ?>">
            <div class="relative w-full">

                <input type="email" id="email" name="email" required
                    class="block w-full px-3 py-2  border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Email">
                <i class="fas fa-envelope absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            </div>

            <!-- Password Field -->
            <div class="relative w-full">

                <input type="password" id="password" name="password" required
                    class="block w-full px-3 py-2  border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Password">
                <i class="fas fa-lock absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-[#007BFF] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Sign In
            </button>
        </form>
        <img src="./assets/img/infotech.png" alt="Profile Picture" class="w-24 h-24 md:w-32 md:h-32 mt-5 rounded-full object-cover infotech-img img-fluid">
    </div>

    <script>
        document.getElementById("login-form").addEventListener("submit", async function(event) {
            event.preventDefault();

            // Get form data
            const formData = {
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                type: document.getElementById('type').value,
            };
            const response = await fetch('./api/api_login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            // Handle the response
            const result = await response.json();
            if (response.ok) {
                // Clear the form
                document.getElementById('login-form').reset();
                if (result.user_type === "student") {
                    window.location.href = "views/student/index.php";
                } else if (result.user_type === "administrator") {
                    window.location.href = "views/admin/index.php";
                }


            } else {
                Swal.fire({
                    title: "Oppsss",
                    text: result.error,
                    icon: "error"
                });

            }
        });
    </script>
    <script src="assets/sweetalert/sweetalert2@11.js"></script>

</body>

</html>