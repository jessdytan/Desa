@extends('admin.main')


@section('konten')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                Berhasil!
                            </strong>
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session('edit_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                Berhasil!
                            </strong>
                            {{ session('edit_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session('hapus_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                Berhasil!
                            </strong>
                            {{ session('hapus_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Pengaduan</h2>
                            </div>
                            
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label></th>
                                <th>Nama</th>
                                <th>Judul Pengajuan</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- @php($i = 1) --}}
                            @foreach ($pengaduan as $penduduk)
                                <tr>
                                    <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                            <label for="checkbox1"></label></th>
                                    <th>{{ $penduduk->nama }}</th>
                                    <th><a href="">{{ $penduduk->judul_laporan }}</a></th>
                                    <th>{{ $penduduk->email }}</th>
                                    <th><h5><span class="badge badge-success">Selesai</span></h5></th>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>

                    {{-- <div class="clearfix">
                        <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item "><a href="#"class="page-link">1</a></li>
                            <li class="page-item "><a href="#"class="page-link">2</a></li>
                            <li class="page-item active"><a href="#"class="page-link">3</a></li>
                            <li class="page-item "><a href="#"class="page-link">4</a></li>
                            <li class="page-item "><a href="#"class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div> --}}









                </div>
            </div>


            
    </div>
@endsection
