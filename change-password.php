<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Change Password</title>
    <script src="../assets/js/validations/admin/change-password.js" type="module" defer></script>
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
            <!-- Main Content starts here -->
            <h1 class="text-xl font-medium text-gray-900">Change Password</h1>

            <!-- Main Content of the admin dashboard -->
            <form class="p-4 md:p-5 max-w-xl" id="change-password-form" method="POST" action="update_password.php">
                <div class="grid gap-4">
                    <div class="col-span-1 mb-2">
                        <label for="old-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Password</label>
                        <input type="password" name="old-password" id="old-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Old Password">
                    </div>
                    <div class="col-span-1 mb-2">
                        <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                        <input type="password" name="new-password" id="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type New Password">
                    </div>

                    <div class="col-span-1 mb-2">
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Confirm Password">
                    </div>

                    

                    


                </div>
                <button type="submit" class="mt-2 text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Update Password
                </button>
            </form>
        </div>
    </div>

</body>

</html>