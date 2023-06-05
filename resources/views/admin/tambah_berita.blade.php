@extends('admin.main')

@section('konten')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('store_berita') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="gambar">masukan gambar</label>
                            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar" required>
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Judul</label>
                            <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul"
                                name="judul" required>
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">slug</label>
                            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                                name="slug" required >
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control  @error('excerpt') is-invalid @enderror"
                                id="excerpt" name="excerpt" required >
                            @error('excerpt')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konten">konten</label>
                            <textarea name="konten" id="wysiwyg-editor" class="text-area"></textarea>
                            @error('konten')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('berita') }}" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection
