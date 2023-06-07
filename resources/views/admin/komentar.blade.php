@extends('admin.main')


@section('konten')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">

                    <div class=" col-lg-3  mb-2 mt-1">
                        <div class="xp-searchbar">
                            <form method="get">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Cari Komentar" name="search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2">Go
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

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
                    @elseif(session('delete_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                Berhasil!
                            </strong>
                            {{ session('delete_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Data Komentar</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>komentar</th>
                                <th>judul berita</th>
                                <th>Tanggal Dibuat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $t = request('page');
                            @endphp
                            @if (empty($t))
                                <?php $i = 1; ?>
                            @else
                                <?php $i = $t * 5 - 4; ?>
                            @endif
                            @foreach ($komentars as $komentar)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <th>{{ $komentar->user->nama }}</th>
                                    <th>{{ $komentar->komentar }}</th>
                                    <th>{{ $komentar->berita->judul }}</th>
                                    <th>{{ $komentar->created_at }}</th>
                                    <th>
                                        <form action="{{ route('delete_komentar', ['id' => $komentar->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin mau menghapus')">
                                                Hapus
                                            </button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $komentars->links() }}
                    </div>

                </div>
            </div>


            <!----add-modal start--------->
            <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('store_data') }}" method="post">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                        id="name" name="name" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nik</label>
                                    <input type="text" class="form-control  @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" required>
                                    @error('nik')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        id="email" name="email" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No Hp</label>
                                    <input type="text" class="form-control  @error('nohp') is-invalid @enderror"
                                        id="nohp" name="nohp" required>
                                    @error('nohp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                        id="password" name="password" required>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!----edit-modal end--------->


            <!----delete-modal start--------->
            <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin mau menghapus data?</p>
                            <p class="text-warning"><small>data akan hilang selamanya,</small></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </div>
            </div>

            <!----edit-modal end--------->




        </div>
    </div>
@endsection
