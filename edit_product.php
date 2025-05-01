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

        <div class="relative w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Edit Product
                    </h3>

                </div>
                <!-- Modal body -->
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM products where id = $id";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                
                ?>
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex justify-center items-center">
                            <img src="../uploads/<?= $row['image'] ?>" alt="Product Image"
                                class="w-full h-auto rounded-lg" style="max-width: 200px; height: auto;">
                        </div>
                        <div>
                            <form class="p-4 md:p-5" id="edit-product-form"action="update_product.php" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="edit-product-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="edit-product-name" id="edit-product-name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Type product name" value="<?= $row['name'] ?>">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="edit-product-price"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="number" name="edit-product-price" id="edit-product-price"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="$2999" value="<?= $row['price'] ?>">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="edit-product-category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select name="edit-product-category" id="edit-product-category"
                                            value="<?= $row['category'] ?>"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="Girls" <?php echo ($row['category'] == "Girls" ? "selected" : "" ) ?>> Girls</option>
                                            <option value="Boys" <?php echo ($row['category'] == "Boys" ? "selected" : "" ) ?>>Boys</option>
                                            <option value="Child" <?php echo ($row['category'] == "Child" ? "selected" : "" ) ?>>Child</option>
                                            <option value="Hip Hop" <?php echo ($row['category'] == "Hip Hop" ? "selected" : "" ) ?>>Hip Hop</option>
                                            <option value="Jeans" <?php echo ($row['category'] == "Jeans" ? "selected" : "" ) ?>>Jeans</option>
                                        </select>
                                    </div>

                                    <div class="col-span-2">
                                        <label for="edit-product-image"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                            Image</label>
                                        <input
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            id="edit-product-image" name="edit-product-image" type="file">
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
