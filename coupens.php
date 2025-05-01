<?php
$currentDirectory = __DIR__;
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once '../config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Coupens</title>
    <script src="../assets/js/validations/admin/coupens.js" defer type="module"></script>

</head>

<body>


    <!-- Admin Navigation -->
    <?php require_once '../includes/admin-navigation.php'; ?>
    <!-- /Admin Navigation -->
    <!-- Admin Sidebar -->
    <?php require_once '../includes/admin-side-menu.php'; ?>
    <!-- /Admin Sidebar  -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            <!-- Main Content of the admin dashboard -->

            <!-- Modals -->

            <!-- Main modal -->
            <div id="edit-coupen-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                style="z-index: 99999;">
                <div class="relative p-4 w-full max-w-[500px] max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Edit Coupen
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="edit-coupen-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" id="edit-coupen-form">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="edit-coupen-name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="edit-coupen-name" id="edit-coupen-name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type product name">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-coupen-coupen"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coupen</label>
                                    <input type="text" name="edit-coupen-coupen" id="edit-coupen-coupen"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="DGN-1331">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-coupen-discount"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount
                                        (in %)</label>
                                    <input type="number" name="edit-coupen-discount" id="edit-coupen-discount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="30">
                                </div>
                                <div class="col-span-2">
                                    <label for="edit-coupen-quantity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="number" name="edit-coupen-quantity" id="edit-coupen-quantity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type quantity">
                                </div>
                                <div class="col-span-2">
                                    <label for="edit-coupen-category"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                    <select name="edit-coupen-category" id="edit-coupen-category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="edit-coupen-validity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Validity</label>
                                    <input type="date" name="edit-coupen-validity" id="edit-coupen-validity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Coupen Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Coupen Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Discount (%)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Validity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                            
$sql = "SELECT * FROM coupons";
$query = $con->query($sql); 
while ($row = $query->fetch_assoc()) {
    # code...

?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $row['coupon_name'] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $row['coupon_code'] ?>

                            </td>
                            <td class="px-6 py-4">
                                <?= $row['discount'] ?>%
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['expiry_date']?>
                            </td>

                            <td class="px-4 py-4">
                                <span
                                    class="
                                    <?php echo $row['status'] == 'active' ? 'text-green text-sm font-medium bg-green-100 dark:bg-green-500 dark:text-green-100 rounded-full px-3 py-1.5' : 'text-red text-sm font-medium bg-red-100 dark:bg-red-500 dark:text-red-100 rounded-full px-3 py-1.5'; ?>"><?= $row['status'] ?></span>
                            </td>

                            <td class="py-4">
                                <a href="edit_copons.php?id=<?= $row['id'] ?>">
                                    <button
                                        class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td class="py-4">
                                <a href="delete_coupons.php?id=<?= $row['id'] ?>">
                                <button
                                    class="block w-full md:w-auto text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                    type="button">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
        <div class="add-product mt-4">
            <button data-modal-target="add-coupen-modal" data-modal-toggle="add-coupen-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Add Coupen
            </button>

            <!-- Main modal -->
            <div id="add-coupen-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                style="z-index: 99999;">
                <div class="relative p-4 w-full max-w-[500px] max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Add new Coupon
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="add-coupen-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="POST" action="add_coupon.php" class="p-4 md:p-5" id="add-coupen-form">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type product name">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="coupen"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coupen
                                        Code</label>
                                    <input type="text" name="coupen" id="coupen"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="DN-1331">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="discount"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount
                                        (in %)</label>
                                    <input type="text" name="discount" id="discount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type discount">
                                </div>

                                <div class="col-span-2 sm:col-span-2">
                                    <label for="quantity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="number" name="quantity" id="quantity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Quantity">
                                </div>

                                <div class="col-span-2">
                                    <label for="validity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coupen
                                        Validity</label>
                                    <input type="date" name="validity" id="validity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Validity">
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
                                Add New Coupen
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Content of the admin dashboard -->
    </div>

</body>

</html>
