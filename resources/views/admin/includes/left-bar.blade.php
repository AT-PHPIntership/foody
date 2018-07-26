<section class="content">
  <div class="container-fluid">
  <!-- #Top Bar -->
  <section>
  <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
        <div class="image">
          <img src="admin/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
          <div class="name" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ Auth::user()->username }}</div>
          <div class="email">{{ Auth::user()->email }}</div>
          <div id="logout-button" class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
              <li><a href="javascript:void(0);"><i
                  class="material-icons">person</i>{{ __('auth.profile') }}</a></li>
              <li role="seperator" class="divider"></li>
              <li><a id="link-click-me" href="{{ route('admin.logout')}}"><i class="material-icons">input</i>{{ __('auth.logout') }}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active"><a href=""> <i class="material-icons">home</i><span>Home</span></a></li>
          <li><a href="javascript:void(0);" class="menu-toggle"><i
              class="material-icons">widgets</i><span>Category</span></a>
            <ul class="ml-menu">
              <li><a href=""> <span>Add new Category</span></a></li>
              <li><a href=""><span>Show all</span></a></li>
            </ul>
          </li>
          <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">assignment</i>
            <span>User Management</span>
          </a>
          <ul class="ml-menu">
            <li><a href="{{ route('admin.users.create') }}">Create user</a></li>
            <li><a href="{{ route('admin.users.index') }}">Show all users</a></li>
          </ul>
          <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> <span>Store</span></a>
          </li>
        </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <div class="legal">
        <div class="copyright">
          &copy; 2018 <a href="javascript:void(0);">Admin-FOODY</a>.
        </div>
        <div class="version">
          <b>Version: </b> 1.0
        </div>
      </div>
      <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    </section>
  </div>
</section>
