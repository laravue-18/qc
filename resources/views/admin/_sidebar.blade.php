<section class="sidebar">
  <ul class="sidebar-menu" data-widget="tree">
    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
      <a href="{{route('admin.dashboard')}}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview {{ Request::is('admin/users*') ? 'menu-open active' : '' }}" style="height: auto;">
      <a href="#">
        <i class="fa fa-users"></i> 
        <span>Manage Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="{{ Request::is('admin/users*') ? 'display:block;' : '' }}">
        <li class="{{ Request::is('admin/users') ? 'active' : '' }}">
          <a href="{{route('admin.users.index')}}" >
            <i class="fa fa-circle"></i> 
            Users List
          </a>
        </li>
        <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}">
          <a href="{{route('admin.users.create')}}">
            <i class="fa fa-circle"></i> 
            Add User
          </a>
        </li>
      </ul>
    </li>
    <li class="treeview {{ Request::is('admin/users/*') ? '' : '' }}" style="height: auto;">
      <a href="#">
        <i class="fa fa-users"></i> 
        <span>Perform QC Work</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="{{ Request::is('admin/users/*') ? '' : '' }}">
        <li class="{{ Request::is('admin/users/index') ? 'active' : '' }}">
          <a href="{{route('admin.users.index')}}" >
            <i class="fa fa-circle"></i> 
            Work List
          </a>
        </li>
        <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}">
          <a href="{{route('admin.users.create')}}">
            <i class="fa fa-circle"></i> 
            QC Work
          </a>
        </li>
      </ul>
    </li>
  </ul>
</section>