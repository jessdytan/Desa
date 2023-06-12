<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="{{asset('img/logo.png')}}" class="img-fluid" /><span>Desa Sukamaju</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="{{ request()->is('admin/admin') ? 'active' : '' }}">
            <a href="{{ route('admin') }}" class="dashboard"><i class="material-icons">dashboard</i>Data penduduk </a>

        </li>
        <li class="dropdown {{ request()->is('admin/pengaduan*') ? 'active' : '' }}" >
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
            class="dropdown-toggle">
                <i class="material-icons">border_color</i>Kelola Pengaduan
            </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu3">
              <li><a href="{{ route('admin.pengaduan') }}">Daftar Pengaduan</a></li>
              <li><a href="{{ route('pengaduan.masuk') }}">Pengaduan Masuk</a></li>
              <li><a href="{{ route('pengaduan.process') }}">Pengaduan Diproses</a></li>
              <li><a href="{{ route('pengaduan.selesai') }}">Pengaduan Selesai</a></li>
          </ul>
		</li>
        
        <li class="{{ request()->is('admin/*berita*') ? 'active' : '' }}">
            <a href="{{ route('berita') }}" class="dashboard"><i class="material-icons">newspaper</i>kelola berita </a>
        </li>
        <li class="{{ request()->is('admin/komentar*') ? 'active' : '' }}">
            <a href="{{ route('admin_komentar') }}" class="dashboard"><i class="material-icons">forum</i>kelola Komentar </a>
        </li>

    </ul>
</div>
