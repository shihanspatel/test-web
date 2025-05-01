<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <nav>
        <ul>
            <div class="icon-container">
                <li><svg xmlns="http://www.w3.org/2000/svg" class="hamburger-icon" id="open-menu" height="35px"
                        viewBox="0 -960 960 960" width="35px" fill="#18b218">
                        <path
                            d="M120-240v-80h520v80H120Zm664-40L584-480l200-200 56 56-144 144 144 144-56 56ZM120-440v-80h400v80H120Zm0-200v-80h520v80H120Z" />
                    </svg>
                </li>
                <li><img src="./assets/icons/freshcart-logo.svg" alt="logo" class="logo-img"></li>
            </div>
            <div class="navigation-links">
                <li><a href="./index2.php" class="<?php echo $currentPage == "index2.php" ? "active-link" : "" ?>">Home</a></li>
                <li><a href="./products2.php" class="<?php echo $currentPage == "products2.php" ? "active-link" : "" ?>">Products</a></li>
                <li>
                    <a href="./about-us2.php" class="<?php echo $currentPage == "about-us2.php" ? "active-link" : "" ?>">About Us</a>
                </li>
                <li><a href="./contact2.php" class="<?php echo $currentPage == "contact2.php" ? "active-link" : "" ?>">Contact</a></li>
                <li><a href="./wishlist.php" class="<?php echo $currentPage == "wishlist.php" ? "active-link" : "" ?>">Wishlist</a></li>
            </div>
            <div class="shopping-icons">
                <!-- <a href="login.html"><button class="btn-login">Login</button></a> -->
                <li class="icon-cart" id="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="#859197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </li>
                <li>
                    <a href="./account.php">
                        <img src="./assets/person/avatar-12.jpg" alt="" class="profile-img">
                    </a>
                </li>

            </div>

        </ul>
    </nav>
</header>