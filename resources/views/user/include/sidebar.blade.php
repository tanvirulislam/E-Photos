 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('user.dashboard')}}" class="brand-link">
    <img src="{{asset('public/admin/images/small_logo.jpeg')}}" alt="e-photos Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">E-PHOTOS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item has-treeview menu-open">
          <a href="{{route('user.dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              User Dashboard
            </p>
          </a>
          
        </li>
        <br>
        
        <li class="nav-item">
          <a href="{{route('user.user_product')}}" class="nav-link">
            
            <i class="nav-icon fab fa-product-hunt"></i>
            <p>
              Product
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('user.user_balance')}}" class="nav-link">
          <i class="nav-icon fas fa-hand-holding-usd"></i>
          
            <p>
              Account balance
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link">
            
          <i class="nav-icon fab fa-sellsy"></i>
            <p>
             Sellior property
            </p>
          </a>
        </li>
               

        <br>
        <li class="nav-item">
          <a href="{{route('user.settings')}}" class="nav-link">
            
            <i class="nav-icon fas fa-user-edit"></i>
            <p>
              Settings
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>