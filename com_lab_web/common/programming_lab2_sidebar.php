<?php
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

<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.menu-toggle').forEach(toggle => {
    toggle.addEventListener('click', function (e) {
      e.preventDefault();

      const parent = this.closest('.menu-item');
      parent.classList.toggle('open');
    });
  });
});

document.querySelectorAll('.menu-sub a').forEach(link => {
  link.addEventListener('click', () => {
    document.querySelectorAll('.menu-item.open')
      .forEach(item => item.classList.remove('open'));
  });
});
</script>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="sidebar app-brand demo">
    <a href="./index.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
      <img src="../../assets/img/logo/logo-csmss.png" class="w-100" alt="csmss-logo">
    </a>
    <a href="javascript:void(0);" 
       class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>
<?php
  define('BASE_URL', '/');
  ?>
  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?= isActive(['index.php']) ?>">
      <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/computer_department/index.php"  class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Home Menu -->
    <li class="menu-item menu-item active open <?= isMenuOpen(['programming_lab2.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Computer department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="programming_lab2.php" class="menu-link">
            <div>Programming lab 2</div>
          </a>
        </li>
        
      </ul>
    </li>
  </ul>
</aside>
