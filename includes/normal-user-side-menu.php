<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class="sidemenu" id="sidebar">
        <ul>
            <div class="main-topbar">
                <img src="./assets/icons/freshcart-logo.svg" alt="FreshCart">
                <img src="./assets/icons/close_23dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg" alt="Close"
                    id="close-sidebar" style="cursor: pointer;">
            </div>
            <div class="links">
                <li> <a href="./index2.php" class="<?php echo $currentPage == "index2.php" ? "active-sidelink": "" ?>">Home</a></li>
                <li><a href="./contact2.php" class="<?php echo $currentPage == "contact2.php" ? "active-sidelink": "" ?>">Contact</a></li>
                <li><a href="./products2.php" class="<?php echo $currentPage == "products2.php" ? "active-sidelink" : "" ?>">Products</a></li>
                <li><a href="./wishlist.php" class="<?php echo $currentPage == "wishlist.php" ? "active-sidelink" : "" ?>">Wishlist</a></li>
                <li>
                    <a href="./about-us2.php" class="<?php echo $currentPage == "about-us2.php" ? "active-sidelink" : "" ?>">About Us</a>
                </li>
            </div>

            <div class="auth-options">
                <li>
                    <a href="./index.php"><button class="button">Logout</button></a>
                </li>

            </div>
        </ul>
    </div>