<!DOCTYPE html>
<html lang="en">
<?php require_once "../config.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <script src="../assets/js/validations/admin/edit_profile.js" type="module" defer></script>
</head>
<body>
    <!-- Admin Navigation -->
    <?php require_once "../includes/admin-navigation.php" ?>
    <!-- /Admin Navigation -->

    <!-- Admin Sidebar -->
    <?php require_once "../includes/admin-side-menu.php" ?>
    <!-- /Admin Sidebar  -->

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">

                <?php 
                    $email = $_SESSION['email'];
                    $sql = "SELECT * FROM users where email = '$email'";
                    $result = $con->query($sql);
                    $row = $result->fetch_assoc();
                ?>
            <!-- Main Content starts here -->
            <h1 class="text-xl font-medium text-gray-900">Edit Profile</h1>
            <div class="grid grid-cols-1 md:grid-cols-3" style="padding-inline: 1rem;">
                <!-- Image Section: One-third of the grid -->
                <div class="p-4 flex justify-center">
                    <img src="../uploads/<?= $row['profile']; ?>" alt="Profile Image" class="w-full h-auto rounded-lg" style="max-width:250px;object-fit:contain;" id="profile-img" >
                </div>
                <!-- Form Section: Two-thirds of the grid -->
                <div class="p-4 col-span-2">
                    <form class="p-4 md:p-5 max-w-4xl" action="update_profile.php" id="edit-profile-form" method="POST" enctype="multipart/form-data">
                        <div class="grid gap-4 mb-4 grid-cols-2">   
                            <div class="col-span-2 mb-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Name" value="<?= $row['name']; ?>">
                            </div>
                            <div class="col-span-2 mb-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?= $_SESSION['email'] ?>" readonly>
                            </div>



                            <div class="col-span-2 md:col-span-1 mb-2">
                                <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose Profile Picture</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name="file_input" type="file">
                            </div>


                        </div>
                        <button type="submit" class="mt-2 text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Update Profile
                        </button>
                    </form>
                </div>
            </div>
            <!-- Main Content of the admin dashboard -->
        </div>
    </div>

</body>

</html>