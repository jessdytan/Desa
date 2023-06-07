<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function berita(Request $request)
    {
        $keyword = request('search');

        if ($keyword) {
            $beritas = Berita::where('judul', 'like', '%' . $keyword . '%')->paginate(5);
        } else {
            $beritas = Berita::paginate(5);
        }
        // $beritas = Berita::paginate(5);
        return view('admin.berita', compact('beritas'));
    }
    public function komentar(Request $request)
    {
        $keyword = request('search');

        if ($keyword) {
            $komentars = Komentar::where('komentar', 'like', '%' . $keyword . '%')->paginate(5);
        } else {
            $komentars = Komentar::paginate(5);
        }
        // $komentar = Komentar::all();
        return view('admin.komentar', compact('komentars'));
    }

    public function tambah_berita()
    {
        return view('admin.tambah_berita');
    }

    public function store_berita(Request $request)
    {
        // dd('uhuy');
        $validate = $request->validate([
            'judul' => 'required|min:5|max:100',
            'slug' => 'required|min:5|max:150',
            'konten' => 'required|min:20',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        $new_berita = new Berita;
        $new_berita->judul = $request->judul;
        $new_berita->slug = $request->slug;
        $new_berita->konten = $request->konten;
        $new_berita->excerpt = Str::limit(strip_tags($request->konten), 200);

        if ($request->hasFile('gambar')) {
            $location = public_path('/img');

            $namaFile = $request->file('gambar')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            $request->file('gambar')->move($location, $namaFileBaru);

            $new_berita->gambar = $namaFileBaru;
        }

        $new_berita->save();


        return redirect()->route('berita')->with('status', 'berita berhasil ditambahkan');
    }

    public function update_berita(Request $request, $id)
    {
        $berita = Berita::find($id);

        $validate = $request->validate([
            'judul' => 'required|min:5|max:100',
            'slug' => 'required|min:5|max:150',
            'konten' => 'required|min:20',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        // $new_berita = new Berita;
        $berita->judul = $request->judul;
        $berita->slug = $request->slug;
        $berita->excerpt = Str::limit(strip_tags($request->konten), 200);
        $berita->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $location = public_path('/img');

            $namaFile = $request->file('gambar')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            $request->file('gambar')->move($location, $namaFileBaru);

            $berita->gambar = $namaFileBaru;
        }

        $berita->save();

        return redirect()->route('berita')->with('edit_status', 'berita berhasil edit');
    }

    public function edit_berita($id)
    {

        $berita = Berita::find($id);

        return view('admin.edit_berita', compact('berita'));

    }

    public function delete_berita($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('berita')->with('delete_status', "Berita berhasil dihapus");
    }

    public function delete_komentar($id)
    {
        $komentar = Komentar::find($id);
        $komentar->delete();

        return redirect()->route('admin_komentar')->with('delete_status', "komentar berhasil dihapus");
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }


}