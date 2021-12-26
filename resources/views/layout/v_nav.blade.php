<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
      <a href="/" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/guru" class="nav-link {{ request()->is('guru') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Guru</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/siswa" class="nav-link {{ request()->is('siswa') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>User</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>