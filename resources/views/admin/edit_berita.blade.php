@extends('admin.main')

@section('konten')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('update_berita', ['id' => $berita->id])}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            {{-- <input type="hidden" value="{{$berita->author_id}}" name="author_id"> --}}
                            <label for="gambar">masukan gambar</label><br>
                            <img src="{{ asset('img/'.$berita->gambar) }}" alt="uhuy">
                            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Judul</label>
                            <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{$berita->judul}}"" required>
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">slug</label>
                            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                                name="slug" value="{{$berita->slug}}" required >
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control  @error('excerpt') is-invalid @enderror"
                                id="excerpt" name="excerpt" value="{{$berita->excerpt}}" required >
                            @error('excerpt')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konten">konten</label>
                            <textarea name="konten" id="wysiwyg-editor" class="text-area">{{ $berita->konten }}</textarea>
                            @error('konten')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('berita') }}" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection
