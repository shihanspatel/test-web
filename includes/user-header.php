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
                    <li><a href="./index.php" class="<?php echo ($currentPage == '' || $currentPage == 'index.php') ? 'active-link' : ''; ?>">Home</a></li>
                    <li><a href="./products.php" class="<?php echo $currentPage == "products.php" ? "active-link": "" ?>">Products</a></li>
                    <li><a href="./about-us.php" class="<?php echo $currentPage == "about-us.php" ? "active-link" : "" ?>">About Us</a></li>
                    <li><a href="./contact.php" class="<?php echo $currentPage == "contact.php" ? "active-link" : ""?>">Contact</a></li>
                </div>
                <div class="shopping-icons">
                    <a href="./login.php"><button class="btn-login">Login</button></a>
                    <!-- <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23px" viewBox="0 -960 960 960" width="23px"
                            class="icon" fill="#5c6c75">
                            <path
                                d="m480-144-50-45q-100-89-165-152.5t-102.5-113Q125-504 110.5-545T96-629q0-89 61-150t150-61q49 0 95 21t78 59q32-38 78-59t95-21q89 0 150 61t61 150q0 43-14 83t-51.5 89q-37.5 49-103 113.5T528-187l-48 43Zm0-97q93-83 153-141.5t95.5-102Q764-528 778-562t14-67q0-59-40-99t-99-40q-35 0-65.5 14.5T535-713l-35 41h-40l-35-41q-22-26-53.5-40.5T307-768q-59 0-99 40t-40 99q0 33 13 65.5t47.5 75.5q34.5 43 95 102T480-241Zm0-264Z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23px" viewBox="0 -960 960 960" width="23px"
                            fill="#5c6c75" class="icon">
                            <path
                                d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23px" viewBox="0 -960 960 960" width="23px"
                            fill="#5c6c75" class="icon">
                            <path
                                d="M263.72-96Q234-96 213-117.15T192-168v-456q0-29.7 21.15-50.85Q234.3-696 264-696h72v-16q0-60 40.5-106T480-864q60 0 102 42t42 102v24h72q29.7 0 50.85 21.15Q768-653.7 768-624v456q0 29.7-21.16 50.85Q725.68-96 695.96-96H263.72Zm.28-72h432v-456h-72v60q0 15.3-10.29 25.65Q603.42-528 588.21-528t-25.71-10.35Q552-548.7 552-564v-60H408v60q0 15.3-10.29 25.65Q387.42-528 372.21-528t-25.71-10.35Q336-548.7 336-564v-60h-72v456Zm144-528h144v-24q0-29.7-21.21-50.85-21.21-21.15-51-21.15T429-770.85Q408-749.7 408-720v24ZM264-168v-456 456Z" />
                        </svg>
                    </li> -->
                </div>

            </ul>
        </nav>
    </header>