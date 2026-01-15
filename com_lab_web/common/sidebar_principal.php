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

<style>
  #layout-menu {
    height: 100vh;
    overflow-y: auto;
    overflow-x: hidden;
    scroll-behavior: smooth;
  }
</style>


<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.menu-toggle').forEach(toggle => {
      toggle.addEventListener('click', function(e) {
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
    <a href="../principal/index.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
      <img src="../assets/img/logo/logo-csmss.png" class="w-100" alt="csmss-logo">
    </a>
    <a href="javascript:void(0);"
      class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <?php
  define('BASE_URL', '/');
  ?>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?= isActive(['index.php']) ?>">
      <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Home Menu -->
    <li class="menu-item menu-item active open <?= isMenuOpen(['networking_lab.php', 'programming_lab1.php', 'programming_lab2.php', 'project_lab.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Computer Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['networking_lab.php']) ?>">
          <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/computer_department/networking_lab.php" class="menu-link">
            <div>Networking Lab</div>
          </a>
        </li>

        <li class="menu-item <?= isActive(['programming_lab1.php']) ?>">
          <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/computer_department/programming_lab1.php" class="menu-link">
            <div>Programming Lab1</div>
          </a>
        </li>

        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/computer_department/programming_lab2.php" class="menu-link">
            <div>Programming Lab2</div>
          </a>
        </li>

        <li class="menu-item <?= isActive(['project_lab.php']) ?>">
          <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/computer_department/project_lab.php" class="menu-link">
            <div>Project Lab</div>
          </a>
        </li>

        <li class="menu-item <?= isActive(['software_development_lab.php']) ?>">
          <a href="<?= BASE_URL ?>computer_lab_web/com_lab_web/principal/computer_department/software_development_lab.php" class="menu-link">
            <div>Software Development Lab</div>
          </a>
        </li>

      </ul>
    </li>
    <!-- AI department -->
    <li class="menu-item menu-item active">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Artificial Intelligence department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['AN-01_lab.php']) ?>">
          <a href="AN-01_lab.php" class="menu-link">
            <div>AN-01 Lab</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['AN-02_lab.php']) ?>">
          <a href="AN-02_lab.php" class="menu-link">
            <div>AN-02 Lab</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['AN-03_lab.php']) ?>">
          <a href="AN-03_lab.php" class="menu-link">
            <div>AN-03 Lab</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['AN-04_lab.php']) ?>">
          <a href="AN-04_lab.php" class="menu-link">
            <div>AN-04 Lab</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Electrical  department -->
    <li class="menu-item menu-item active ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Electrical Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['basic_electrical_engineering_laboratory.php']) ?>">
          <a href="basic_electrical_engineering_laboratory.php" class="menu-link">
            <div>Basic Electrical Engineering Laboratory</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['power_electronics_laboratory.php']) ?>">
          <a href="power_electronics_laboratory.php" class="menu-link">
            <div>Power Electronics Laboratory</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Electronic department -->
    <li class="menu-item menu-item active">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Electronic Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['networking_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab1.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['project_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['software_development_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
      </ul>
    </li>


    <!-- Mechanical department -->
    <li class="menu-item menu-item active">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Mechanical Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['networking_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab1.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['project_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['software_development_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- civil department -->
    <li class="menu-item menu-item active">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Civil Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive(['networking_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab1.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['programming_lab2.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['project_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
        <li class="menu-item <?= isActive(['software_development_lab.php']) ?>">
          <a href="#" class="menu-link">
            <div>#</div>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</aside>