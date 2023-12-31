 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
  
 
          </li>
         


          {{-- <li class="nav-item menu-open">
            <a href="{{route('map.index')}}" class="nav-link active">
                <i class="fa fa-cc-stripe"></i>
              <p>
                Map 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Player</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Player</p>
                </a>
              </li>
         
            </ul>
          </li> --}}

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-building-o" aria-hidden="true"></i>
              <p>
                Company  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Company Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('company.show')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Company Detail</p>
                </a>
              </li>
         
            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                Employees  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.show')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Employees</p>
                </a>
              </li>
         
            </ul>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>