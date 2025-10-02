<?php
$current_page = $_SERVER['PHP_SELF']; // full relative path

function isActive($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    // Match at the end of the string to avoid substring conflicts
    if (str_ends_with($current_page, $page)) {
      return 'active';
    }
  }
  return '';
}

function isMenuOpen($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    if (str_ends_with($current_page, $page)) {
      return 'active open';
    }
  }
  return '';
}

// For PHP versions < 8
if (!function_exists('str_ends_with')) {
  function str_ends_with($haystack, $needle)
  {
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
  }
}
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="sidebar app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
            <img src="../assets/img/logo/logo-csmss.png" class="w-100" alt="csmss-logo">

        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?= isActive(['index.php', 'admin_index.php']) ?>">
            <a href="../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Home Menu -->
        <li class="menu-item <?= isMenuOpen(['slider.php', 'latest_update.php', 'latest_news_home.php', 'event.php', 'gallery/gallery.php', 'courses.php', 'testimonials.php', 'counters.php', 'members.php', 'partner.php']) ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Home</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= isActive('slider/slider.php') ?>">
                    <a href="../slider/slider.php" class="menu-link">
                        <div>Slider</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('latest_update/latest_update.php') ?>">
                    <a href="../latest_update/latest_update.php" class="menu-link">
                        <div>Latest Updates</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('latest_news/latest_news_home.php') ?>">
                    <a href="../latest_news/latest_news_home.php" class="menu-link">
                        <div>latest News</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('event-home/event.php') ?>">
                    <a href="../event-home/event.php" class="menu-link">
                        <div>Events</div>
                    </a>
                </li>
                <!-- <li class="menu-item <?= isActive('gallery/gallery.php') ?>">
          <a href="../gallery/gallery.php" class="menu-link">
            <div>Gallery</div>
          </a>
        </li> -->
                <li class="menu-item <?= isActive('courses/courses.php') ?>">
                    <a href="../courses/courses.php" class="menu-link">
                        <div>Courses</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('testimonials/testimonials.php') ?>">
                    <a href="../testimonials/testimonials.php" class="menu-link">
                        <div>Feedback Modal</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('counters/counters.php') ?>">
                    <a href="../counters/counters.php" class="menu-link">
                        <div>Counters</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('members/members.php') ?>">
                    <a href="../members/members.php" class="menu-link">
                        <div>Members</div>
                    </a>
                </li>
                <li class="menu-item <?= isActive('partner/partner.php') ?>">
                    <a href="../partner/partner.php" class="menu-link">
                        <div>Partner</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>