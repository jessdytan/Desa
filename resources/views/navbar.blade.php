 <!--  NAVBAR -->
 <div class="container py-5">
     <div class="shadow p-3 mb-5  fixed-top bg-body-tertiary rounded">
         <div style="background-color: #327a6d;">
             <div class="nav justify-content-center">
                 <ul class="nav nav-fill">
                     <li class="nav-item">
                         <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link active"
                             aria-current="page" href="/">BERANDA</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link dropdown-toggle"
                             data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PEMERINTAHAN
                             DESA</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('visi') }}">Visi dan Misi</a></li>
                             <li><a class="dropdown-item" href="{{ route('pemerintah') }}">Pemerintah Desa</a></li>
                             <li><a class="dropdown-item" href="{{ route('badan_pem') }}">Badan Permusyawaratan Desa</a>
                             </li>
                         </ul>
                     </li>
                     
                     <li class="nav-item dropdown">
                         <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link dropdown-toggle"
                             data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DATA DESA</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('data_pendidikan') }}"> Data Pendidikan Dalam KK</a></li>
                             <li><a class="dropdown-item" href="{{ route('data_job') }}"> Data Pekerjaan</a></li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown">
                         <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link "
                             href="{{ route('pengaduan') }}" role="button" aria-expanded="false">LAYANAN PENGADUAN</a>
                     </li>
                    
                     <li class="nav-item dropdown">
                         @auth
                             <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link" href="{{ route('logout.admin') }}"
                                 role="button" aria-expanded="false">LOGOUT</a>
                         @else
                             <a style="color:white;font-size:larger;font-weight:200px; " class="nav-link dropdown-toggle"
                                 data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">LOGIN</a>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="{{ route('login.admin') }}">Administrator</a></li>
                                 <li><a class="dropdown-item" href="#">Layanan Mandiri</a></li>
                             </ul>
                         @endauth
                     </li>
                 </ul>
             </div>
         </div>
     </div><br>
