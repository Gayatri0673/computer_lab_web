<?php
// Get current file name (e.g., "slider.php")
$current_page = basename(parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH));

function isActive($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    if ($current_page === basename($page)) {
      return 'active';
    }
  }
  return '';
}

function isMenuOpen($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    if ($current_page === basename($page)) {
      return 'active open';
    }
  }
  return '';
}
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="sidebar app-brand demo">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
      <img src="../assets/img/logo/logo-csmss.png" class="w-100" alt="csmss-logo">
    </a>
    <a href="javascript:void(0);" 
       class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?= isActive(['index.php']) ?>">
      <a href="../index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Home Menu -->
    <li class="menu-item <?= isMenuOpen(['networking_lab.php','programming_lab1.php','programming_lab2.php','project_lab.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Computer Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['networking_lab.php']) ?>">
          <a href="networking_lab.php" class="menu-link">
            <div>Networking Lab</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab1.php']) ?>">
          <a href="programming_lab1.php" class="menu-link">
            <div>Programming Lab1</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="programming_lab2.php" class="menu-link">
            <div>Programming Lab2</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['project_lab.php']) ?>">
          <a href="project_lab.php" class="menu-link">
            <div>Project Lab</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['software_development_lab.php']) ?>">
          <a href="software_development_lab.php" class="menu-link">
            <div>Software Development Lab</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
