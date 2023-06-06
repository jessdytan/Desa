<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="{{asset('img/logo.png')}}" class="img-fluid" /><span>Desa kom C</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="active">
            <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Data penduduk </a>
        </li>
        <li class="dropdown" >
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
            class="dropdown-toggle">
                <i class="material-icons">military_tech</i>Daftar Pengaduan
            </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu3">
              <li><a href="{{ route('pengaduan.masuk') }}">Pengaduan Masuk</a></li>
              <li><a href="{{ route('pengaduan.process') }}">Pengaduan Diproses</a></li>
              <li><a href="{{ route('pengaduan.selesai') }}">Pengaduan Selesai</a></li>
          </ul>
		</li>
        <li class="">
            <a href="#" class="dashboard"><i class="material-icons">library_books</i>kelola berita </a>
        </li>
        <li class="">
            <a href="{{ route('admin.pengaduan') }}" class="dashboard"><i class="material-icons">border_color</i>kelola pengaduan </a>
        </li>
    </ul>
</div>