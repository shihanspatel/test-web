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
        <div class="relative p-4 w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <?php
                
                $id = $_GET['id'];
                $sql = "SELECT * FROM coupons where id = $id";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                ?>

                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Coupen
                    </h3>
                </div>
                <!-- Modal body -->
                <form action="update_copons.php"class="p-4 md:p-5" id="edit-coupen-form"method="POST"
                    enctype="multipart/form-data">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="edit-coupen-name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="edit-coupen-name" id="edit-coupen-name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name"value="<?= $row['coupon_name'] ?>">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit-coupen-coupen"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coupen</label>
                            <input type="text" name="edit-coupen-coupen" id="edit-coupen-coupen"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="DGN-1331"value="<?= $row['coupon_code'] ?>">
                        </div>

                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit-coupen-discount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount
                                (in %)</label>
                            <input type="number" name="edit-coupen-discount" id="edit-coupen-discount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="30"value="<?= $row['discount'] ?>">
                        </div>
                        <div class="col-span-2">
                            <label for="edit-coupen-quantity"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                            <input type="number" name="edit-coupen-quantity" id="edit-coupen-quantity"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type quantity"value="<?= $row['quantity'] ?>">
                        </div>
                        <div class="col-span-2">
                            <label for="edit-coupen-category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select name="edit-coupen-category" id="edit-coupen-category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"value="<?php echo $row['status']; ?>">
                                <option value="active" <?php echo $row['status'] == 'inactive' ? 'selected' : ''; ?>>Active</option>
                                <option value="inactive" <?php echo $row['status'] == 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="edit-coupen-validity"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Validity</label>
                            <input type="date" name="edit-coupen-validity" id="edit-coupen-validity"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?= $row['expiry_date'] ?>">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
