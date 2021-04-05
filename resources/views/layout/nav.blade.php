<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="/home"><i class="fa fa-home"></i> <span>Dashboard</span></i></a>
    <li class="{{ request()->is('pegawai') ? 'active' : '' }}"><a href="/pegawai"><i class="fa fa-users"></i> <span>Pegawai</span></i></a>
    <li class="{{ request()->is('jabatan') ? 'active' : '' }}"><a href="/jabatan"><i class="fa fa-user"></i> <span>Jabatan</span></i></a>     
    <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
    </li><br><br><br><br><br><br><br><br><br><br>

    <li class="header">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf 
    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-sign-out">  LOG OUT </i></button>
    </form>        
    </li>
</ul>



        <!--<ul class="sidebar-mane" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li> 
        
          
          
          <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="/home" class="nav-link">
              <i class="fa fa-home"></i>
              <p>HOME</p>
            </a>
          </li>
          
          <li class="{{ request()->is('jabatan') ? 'active' : '' }}">
            <a href="/jabatan" class="nav-link">
            <i class="fas fa-user-friends"></i>
              <p>JABATAN</p>
            </a>
          </li>
          
          <li class="{{ request()->is('pegawai') ? 'active' : '' }}">
            <a href="/pegawai" class="nav-link">
              <i class="fa fa-users"></i>
              <p>PEGAWAI</p>
            </a>
          </li>                 
                      
            <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-file-powerpoint"></i>
              <p>
                PRESENSI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="/  " class="nav-link">
                <i class="fas fa-sign-in-alt"></i>
                  <p>Masuk </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                  <p>Keluar</p>
                </a>
              </li>
            </ul>

           
            <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-file-alt"></i>
              <p>
                LAPORAN PRESENSI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/  " class="nav-link">
                <i class="fas fa-file"></i>
                  <p>Presensi Karyawan </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                <i class="fas fa-file"></i>
                  <p>Presensi Keseluruhan</p>
                </a>
              </li>
            </ul>
            <li class="{{ request()->is('logout') ? 'active' : '' }}">
                <a href="{{ route('logout') }}" class="nav-link">
                 <i class="fas fa-sign-out-alt"></i>
                 <p>LOGOUT</p>
            </a>
          </li>
        </li>
        </ul>
        