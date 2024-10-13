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
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-[#B7C9E2] flex items-center justify-center min-h-screen p-4">

    <div class="max-w-sm w-full  p-6 flex flex-col items-center justify-center gap-4">

        <img src="./assets/img/logo.png" alt="Profile Picture" class="w-26 h-26 md:w-34 md:h-34 rounded-full object-cover">
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
            <!-- Data Privacy Checkbox -->
            <div class="flex items-center gap-2">
                <input type="checkbox" id="privacy" name="privacy" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <label for="privacy" class="text-sm text-gray-700">
                    I agree to the <button type="button" id="privacy-modal-btn" class="text-blue-500 underline" data-bs-toggle="modal" data-bs-target="#staticBackdrop">data privacy policy</button>.
                </label>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Data Privacy Policy</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-gray-700">I am fully aware that the <strong>Aurora State College of Technology (ASCOT)</strong> or its designated representative is duty bound and obligated under the Data Privacy Act of 2012 to protect all my personal and sensitive information that it collects, processes, and retains upon my enrolment and during my stay in the College.
                        Student personal Information includes any information about my identity, academics, medical conditions, or any documents containing my identity. This includes but not limited to my name, address, names of my parents or guardians, date of birth, grades, attendance, disciplinary records, and other information necessary for basic administration and instruction. I understand that my personal information cannot be disclosed without my consent. I understand that the information that was collected and processed relates to my enrolment and to be used by ASCOT to pursue its legitimate interests as an educational institution. Likewise, I am fully aware that ASCOT may share such information to affiliated or partner organizations as part of its contractual obligations, or with government agencies pursuant to law or legal processes. In this regard, I hereby allow ASCOT to collect, process, use and share my personal data in the pursuit of its legitimate interests as an educational institution.
                        In addition, I am likewise giving my consent/ permission in favor of my parents/ guardian/representative or whoever is responsible in providing care for me to access, verify, examine and or inspect my academic and scholastic records, school fees/accounts in the College, the result of my physical medical examination (PME) and all matters that relate to my status as a student of the College.
                        Finally, should I commit any misconduct or should there be a complaint filed against me, before the Office of the Student Affairs and Services by reason of violation of the provisions of the Student Handbook or any Laws or ordinances, I hereby authorize and give my full consent in favor of the College to inform my parents, guardian, representative or whoever person is in charge of providing care or custody for me.
                        Upon clicking the I AGREE button, I hereby give my consent for the processing, release, and retention of personal information.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="disagree" data-bs-dismiss="modal">I Do Not Agree</button>
                        <button type="button" class="btn btn-success" id="agree" data-bs-dismiss="modal">I Agree</button>
                    </div>
                    </div>
                </div>
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
    <script>
        const checkbox = document.getElementById('privacy');
        const agreeBtn = document.getElementById('agree');
        const disagreeBtn = document.getElementById('disagree');


        agreeBtn.addEventListener("click", function() {
            checkbox.checked = true
        })

        disagreeBtn.addEventListener("click", function() {
            checkbox.checked = false
        })

    </script>

</body>

</html>
