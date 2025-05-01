<?php
$currentDirectory = __DIR__;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reviews</title>
    <script src="../assets/js/validations/admin/users.js" type="module" defer></script>
    <style>
        .review-text {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
    </style>
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
            <!-- Main Content of the admin dashboard -->

            <!-- Modals -->

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Product</th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Reviews
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rating
                                </th>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Date
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   men's jecket
                                </th>
                                <td class="px-6 py-4">Aghera Bansi</td>
                                <td class="px-6 py-4 review-text" style="max-width: 300px;">
                                    This is very good that i am using this product from last 2 years and i am very happy with this product.
                                </td>
                                <td>
                                    <div class="stars flex items-center space-x-1">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star_half.svg" alt="half_star">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo date('d F Y', strtotime('2025-12-12')); ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    jeans'pant
                                </th>
                                <td class="px-6 py-4">jay karad</td>
                                <td class="px-6 py-4 review-text" style="max-width: 300px;">
                                    Packaging is not satisfiable. I am not happy with the packaging of this product.
                                </td>
                                <td>
                                    <div class="stars flex items-center space-x-1">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <img src="../assets/icons/star_half.svg" alt="half_star">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo date('d F Y', strtotime('2025-1-12')); ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <!-- Main Content of the admin dashboard -->
    </div>

</body>

</html>