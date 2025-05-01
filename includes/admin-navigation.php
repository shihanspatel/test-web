
<?php 
require_once "../config.php";
  session_start();
  if (isset($_SESSION['email']) and isset($_SESSION['email'])) {
    if ($_SESSION['email'] !== "agherabansi2@gmail.com"){
      header("location: ../login.php");
    }
  }else {
    header("location: ../login.php");
  }
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

  html {
    font-family: "Inter", sans-serif;
    
  }

  @media screen and (min-width: 640px) {
    #admin-nav {
      z-index: 40;
    }
  }

  @media screen and (max-width: 640px) {
    #admin-nav {
      z-index: 30;
    }
  }
</style>
<link rel="stylesheet" href="../assets/css/notyf.min.css">
<link rel="stylesheet" href="../assets/css/flowbite.min.css">
<script src="../assets/js/flowbite.min.js" defer></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery.validate.min.js.js"></script>
<script src="../assets/js/additional-methods.min.js.js"></script>
<script src="../assets/js/notyf.min.js"></script>
  
<?php 
 
$email = $_SESSION['email'];
$sql = "SELECT * FROM users where email = '$email'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>
<nav id="admin-nav" class="fixed top-0 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button id="open-sidebar" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
        </button>
        <a href="" class="flex ms-2 md:me-24">
          <img src="../assets/icons/logo website.png" class="me-3" style="max-width: 150px;" alt="FreshCart Logo" />
        </a>
      </div>
      <div class="flex items-center">
        <div class="flex items-center ms-3">
          <div>
            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="../uploads/<?= $row['profile']; ?>" alt="user photo">
            </button>
          </div>
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-gray-900 dark:text-white" role="none">
                <?= $row['name']; ?>
              </p>
              <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                <?= $_SESSION['email']; ?>
              </p>
            </div>
            <ul class="py-1" role="none">
              <li>
                <a href="./dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
              </li>
              <li>
                <a href="./edit-profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Edit Profile</a>
              </li>

              <li>
                <a href="./change-password.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Change Password</a>
              </li>

              <li>
                <a href="./logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>