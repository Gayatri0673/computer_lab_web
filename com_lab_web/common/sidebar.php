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
    <li class="menu-item <?= isMenuOpen(['slider.php','latest_update.php','latest_news_home.php','event.php','courses.php','counters.php','members.php','partner.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Home</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['slider.php']) ?>">
          <a href="../slider/slider.php" class="menu-link">
            <div>Slider</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['latest_update.php']) ?>">
          <a href="../latest_update/latest_update.php" class="menu-link">
            <div>Latest Updates</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['latest_news_home.php']) ?>">
          <a href="../latest_news/latest_news_home.php" class="menu-link">
            <div>Latest News</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['event.php']) ?>">
          <a href="../event-home/event.php" class="menu-link">
            <div>Events</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['courses.php']) ?>">
          <a href="../courses/courses.php" class="menu-link">
            <div>Courses</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['counters.php']) ?>">
          <a href="../counters/counters.php" class="menu-link">
            <div>Counters</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['members.php']) ?>">
          <a href="../members/members.php" class="menu-link">
            <div>Members</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['partner.php']) ?>">
          <a href="../partner/partner.php" class="menu-link">
            <div>Partner</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
