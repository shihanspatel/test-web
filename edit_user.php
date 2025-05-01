<link rel="stylesheet" href="../assets/css/notyf.min.css">
<link rel="stylesheet" href="../assets/css/flowbite.min.css">
<script src="../assets/js/flowbite.min.js" defer></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery.validate.min.js.js"></script>
<script src="../assets/js/additional-methods.min.js.js"></script>
<script src="../assets/js/notyf.min.js"></script>
<script src="../assets/js/validations/admin/add-product.js" type="module" defer></script>
<?php require_once '../config.php'; ?>

<?php require_once '../includes/admin-navigation.php'; ?>
<?php require_once '../includes/admin-side-menu.php'; ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        <!-- Main Content of the admin dashboard -->

        <div class="relative w-full max-h-full max-w-4xl">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Edit User
                    </h3>
                    </button>
                </div>
                <!-- Modal body -->
                 <?php 

                 
                $id = $_GET['id'];
                $sql = "SELECT * FROM users where id = $id";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex justify-center items-center">
                            <img src="../uploads/<?= $row['profile'] ?>" alt="User Image" class="w-full h-auto rounded-lg"
                                style="max-width: 200px; object-fit: contain;">
                        </div>
                        <div>
                            <form action="update_user.php" class="p-4 md:p-5" id="edit-user-form" method="POST" enctype="multipart/form-data">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Type Name" value="<?= $row['name'] ?>">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="text" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            value="<?= $row['email'] ?> "readonly>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="hidden" name="id" value="<?= $row['id'];?>">
                                        <label for="status"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                        <select name="status" id="status"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?php echo $row['status']; ?>">
                                            <option value="inactive" <?php echo ($row['status'] == "inactive" ? "selected" : "") ?>>Inactive</option>
                                            <option value="active" <?php echo ($row['status'] == "active" ? "selected" : "") ?>>Active</option>
                                            <option value="disable"<?php echo ($row['status'] == "disable" ? "selected" : "") ?>>Disable</option>
                                        </select>
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label for="file_input"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose
                                            Profile Picture</label>
                                        <input
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            id="file_input" name="file_input" type="file">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full mt-2 text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Save Changes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
