<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="/img/logo.png" alt="SEPC Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">SEPC Member Portal</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">{{auth::user()->name}}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Active Page</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inactive Page</p>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <router-link to="/profile" class="nav-link">
                <i class="fas fa-id-card"></i>
                <p>
                Profile
                <i class="right fa fa-angle-left"></i>
                </p>
            </router-link>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/profile" class="nav-link active">
                            <i class="fas fa-info-circle"></i>
                            <p>Basic Details</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile/company" class="nav-link">
                            <i class="fas fa-building"></i>
                            <p>Company Details</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile/partners" class="nav-link">
                            <i class="fas fa-handshake"></i>
                            <p>Partners</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile/branches" class="nav-link">
                            <i class="fas fa-code-branch"></i>
                            <p>Branches</p>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <router-link to="/users" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>
                    Users                    
                    </p>
                </router-link>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="fas fa-power-off"></i>
                    <p>
                    {{ __('Logout') }}                    
                    </p>
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
    