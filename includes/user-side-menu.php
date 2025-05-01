<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<div class="sidemenu" id="sidebar">
        <ul>
            <div class="main-topbar">
                <img src="./assets/icons/freshcart-logo.svg" alt="FreshCart">
                <img src="./assets/icons/close_23dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg" alt="Close"
                    id="close-sidebar" style="cursor: pointer;">
            </div>
            <div class="links">
                <li> <a href="./index.php" class="<?php echo ($currentPage == "index.php" or $currentPage == "" )? 'active-sidelink' : '' ?>">Home</a></li>
                <li><a href="./products.php" class="<?php echo $currentPage == "products.php" ? "active-sidelink" : "" ?>">Product</a></li>
                <li><a href="./contact.php" class="<?php echo $currentPage == "contact.php" ? "active-sidelink" : "" ?>">Contact</a></li>
                <li>
                    <a href="./about-us.php" class="<?php echo $currentPage == "about-us.php" ? "active-sidelink" : "" ?>">About Us</a>
                </li>
            </div>

            <div class="auth-options">
                <li>
                    <a href="./login.php"><button class="button">Login</button></a>
                </li>

            </div>
        </ul>
</div>