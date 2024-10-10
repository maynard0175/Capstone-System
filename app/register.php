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
    <title>Register</title>
    <script src="./assets/tailwind/tailwind.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom styling for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            overflow-y: auto;
            max-height: 80vh;
            position: relative;
        }
    </style>
</head>

<body class="bg-[#B7C9E2] flex items-center justify-center min-h-screen p-4">

    <!-- Modal -->
    <div id="privacy-modal" class="modal">
        <div class="modal-content">
            <span id="close-modal" class="absolute top-0 right-0 text-gray-500 cursor-pointer">&times;</span>
            <h2 class="text-lg font-bold mb-4">Data Privacy Policy</h2>
            <p class="text-gray-700">I am fully aware that the Aurora State College of Technology (ASCOT) or its designated representative is duty bound and obligated under the Data Privacy Act of 2012 to protect all my personal and sensitive information that it collects, processes, and retains upon my enrolment and during my stay in the College.
                Student personal Information includes any information about my identity, academics, medical conditions, or any documents containing my identity. This includes but not limited to my name, address, names of my parents or guardians, date of birth, grades, attendance, disciplinary records, and other information necessary for basic administration and instruction. I understand that my personal information cannot be disclosed without my consent. I understand that the information that was collected and processed relates to my enrolment and to be used by ASCOT to pursue its legitimate interests as an educational institution. Likewise, I am fully aware that ASCOT may share such information to affiliated or partner organizations as part of its contractual obligations, or with government agencies pursuant to law or legal processes. In this regard, I hereby allow ASCOT to collect, process, use and share my personal data in the pursuit of its legitimate interests as an educational institution.
                In addition, I am likewise giving my consent/ permission in favor of my parents/ guardian/representative or whoever is responsible in providing care for me to access, verify, examine and or inspect my academic and scholastic records, school fees/accounts in the College, the result of my physical medical examination (PME) and all matters that relate to my status as a student of the College.
                Finally, should I commit any misconduct or should there be a complaint filed against me, before the Office of the Student Affairs and Services by reason of violation of the provisions of the Student Handbook or any Laws or ordinances, I hereby authorize and give my full consent in favor of the College to inform my parents, guardian, representative or whoever person is in charge of providing care or custody for me.
                Upon clicking the I AGREE button, I hereby give my consent for the processing, release, and retention of personal information.</p>
            <div class="flex justify-end gap-4 mt-4">
                <button id="agree-btn" class="bg-[#007BFF] text-white px-4 py-2 rounded-md">I Agree</button>
                <button id="disagree-btn" class="bg-gray-500 text-white px-4 py-2 rounded-md">I Do Not Agree</button>
            </div>
        </div>
    </div>

    <div class="max-w-md w-full p-6 rounded-lg flex flex-col items-center justify-center gap-4">

        <img src="./assets/img/logo.png" alt="Profile Picture" class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover">
        <p class="text-lg md:text-xl font-medium text-center">Create your account</p>

        <!-- Registration Form -->
        <form id="registration-form" class="w-full flex flex-col gap-4">
            <!-- First Name -->
            <div class="w-full">
                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" name="first-name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <!-- Last Name -->
            <div class="w-full">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last-name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <!-- Email -->
            <div class="relative w-full">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <i class="fas fa-envelope absolute right-3 top-10 transform -translate-y-1/2 text-gray-500"></i>
            </div>

            <!-- Role Selection -->
            <div class="w-full">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="" disabled selected>Select a role</option>
                    <option value="administrator">Administrator</option>
                    <option value="student">Student</option>
                </select>
            </div>

            <!-- Password -->
            <div class="relative w-full">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <i class="fas fa-lock absolute right-3 top-10 transform -translate-y-1/2 text-gray-500"></i>
            </div>

            <!-- Retype Password -->
            <div class="relative w-full">
                <label for="retype-password" class="block text-sm font-medium text-gray-700">Retype Password</label>
                <input type="password" id="retype_password" name="retype-password" required
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <i class="fas fa-lock absolute right-3 top-10 transform -translate-y-1/2 text-gray-500"></i>
            </div>

            <!-- Data Privacy Checkbox -->
            <div class="flex items-center gap-2">
                <input type="checkbox" id="privacy" name="privacy" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required>
                <label for="privacy" class="text-sm text-gray-700">
                    I agree to the <button type="button" id="privacy-modal-btn" class="text-blue-500 underline">data privacy policy</button>.
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-[#007BFF] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Register
            </button>
        </form>
        <a href="confirmation.php" class="text-blue-900">I already have an account</a>
        <a href="index.php" class="text-blue-900 underline"><i class="fas fa-home"></i>
            Home</a>

    </div>

    <script>
        // JavaScript to handle modal functionality and checkbox
        const modal = document.getElementById('privacy-modal');
        const btn = document.getElementById('privacy-modal-btn');
        const closeBtn = document.getElementById('close-modal');
        const agreeBtn = document.getElementById('agree-btn');
        const disagreeBtn = document.getElementById('disagree-btn');
        const checkbox = document.getElementById('privacy');

        // Open modal on button click
        btn.onclick = function() {
            modal.style.display = 'block';
        }

        // Close modal on close button click
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        // Close modal on click outside of modal content
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Handle "I Agree" button click
        agreeBtn.onclick = function() {
            checkbox.checked = true;
            modal.style.display = 'none';
        }

        // Handle "I Do Not Agree" button click
        disagreeBtn.onclick = function() {
            checkbox.checked = false;
            modal.style.display = 'none';
        }


        // Show modal and do nothing when checkbox is clicked
        checkbox.onclick = function(event) {
            event.preventDefault();
            modal.style.display = 'block';

        }
    </script>


    <script>
        document.getElementById('registration-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                first_name: document.getElementById('first_name').value,
                last_name: document.getElementById('last_name').value,
                email: document.getElementById('email').value,
                role: document.getElementById('role').value,
                password: document.getElementById('password').value,
                retype_password: document.getElementById('retype_password').value,
                privacy: document.getElementById('privacy').checked
            };

            try {
                const response = await fetch('./api/api_create_users.php', {
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
                    document.getElementById('registration-form').reset();
                    Swal.fire({
                        title: "Successs",
                        text: "Registration successful!",
                        icon: "success"
                    });

                } else {
                    Swal.fire({
                        title: "Oppsss",
                        text: result.error,
                        icon: "error"
                    });

                }
            } catch (error) {

                Swal.fire({
                    title: "Oppsss",
                    text: 'Something went wrong, please try again later.',
                    icon: "error"
                });

            }
        });
    </script>
    <script src="assets/sweetalert/sweetalert2@11.js"></script>

</body>

</html>