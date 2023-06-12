<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Pengaduan;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        // dd(auth()->user()->nama);
        $keyword = request('search');
     
         if ($keyword) {
             $beritas = Berita::where('judul', 'like', '%' . $keyword . '%')->paginate(5);
         } else {
             $beritas = Berita::paginate(5);
         }
        // $beritas = Berita::paginate(5);
        return view('index', [
            'beritas' => $beritas,
        ]);
    }
    public function detail_berita($id)
    {
        $komentar = Komentar::where('berita_id', $id)->get();
        $berita = Berita::find($id);
        return view('Artikel', [
            'berita' => $berita,
            'komentar' => $komentar,
        ]);
    }

    public function pengaduan()
    {
        $category = Category::all();
        return view('Pengaduan', compact('category'));
    }

    public function visi_misi()
    {
        return view('visimisi.visi_misi');
    }
    public function pem_desa()
    {
        return view('pemerintahan_desa.pem_desa');
    }
    public function badan_permusyawaratan()
    {
        return view('badan_permusyawaratan.badan_permusyawaratan');
    }
    public function data_pekerjaan()
    {
        return view('data_pekerjaan.data_pekerjaan');
    }
    public function data_pendidikan()
    {
        return view('data_pendidikan.data_pendidikan');
    }

    public function komentar(request $request)
    {
        $komentar = new Komentar;

        $komentar->komentar = $request->komentar;
        $komentar->berita_id = $request->berita_id;
        $komentar->user_id = auth()->user()->id;

        $komentar->save();

        return redirect()->back();
    }

    public function login()
    {
        return view('login_register.login');
    }

    public function register()
    {
        return view('login_register.register');
    }
    public function forgot()
    {
        return view('login_register.konfirmasi');
    }

    public function reg_penduduk(request $request)
    {
        $validated = $request->validate([
            'nama' => "required|min:5|max:100",
            'email' => "required|min:5|max:100",
            'nik' => "required|min:10",
            'no_hp' => "required|min:10",
            'password' => "required|min:5"
        ]);

        $new_penduduk = new User;
        $new_penduduk->nama = $request->nama;
        $new_penduduk->email = $request->email;
        $new_penduduk->nik = $request->nik;
        $new_penduduk->no_hp = $request->no_hp;
        $new_penduduk->password = $request->password;
        $new_penduduk->id = $request->id;

        $new_penduduk->save();

        return redirect()->route('login_user')->with('status', 'Berhasil diregistrasi silahkan login!');
    }
    public function store_pengaduan(request $request)
    {
        $validated = $request->validate([
            'title' => "required|min:5|max:100",
            'content' => "required|min:5",
            'lokasi' => "required|min:10",
            'bukti' => "image|mimes:jpg,png,jpeg,gif,svg"
        ]);
        
        $new_laporan = new Pengaduan;
        $new_laporan->judul_laporan = $request->title;
        $new_laporan->penduduk_id = $request->penduduk;
        $new_laporan->content_laporan = $request->content;
        $new_laporan->status_laporan = $request->status;
        $new_laporan->lokasi = $request->lokasi;
        $new_laporan->category_id = $request->category;
        $new_laporan->gambar = $request->bukti;
        $new_laporan->id = $request->id;
        
        if ($request->hasFile('gambar')) {
            $location = public_path('/img');

            $namaFile = $request->file('gambar')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            $request->file('gambar')->move($location, $namaFileBaru);

            $new_laporan->gambar = $namaFileBaru;
        }

        $new_laporan->save();

        return redirect()->route('pengaduan')->with('status', 'Pengaduan Anda berhasil diajukan!');
    }

    public function login_logic(request $request)
    {
        $request->validate(([
            'nik' => 'required',
            'password' => 'required',
        ]));
        $data = [
            'nik' => $request->nik,
            'password' => $request->password
        ];

        if (Auth::guard('web')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('pengaduan');
        } else {
            return redirect()->route('login_user')->with('failed', 'NIK atau password salah');
        }
    }

    public function forgot_logic(request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $hasil = User::where('email', $request->email)->get();

        if (isset($hasil[0]->email)) {
            return redirect('/penduduk/reset_password?email=' . $request->email);
        } else {
            return back()->with('gagal', 'Konfirmasi Email Gagal');
        }
    }

    public function reset()
    {
        // dd('uhuy');
        $email = request('email');
        return view('login_register.reset', compact('email'));
    }

    public function reset_logic(Request $request)
    {
        $request->validate([
            'password' => 'required|same:konfirmasi_password|min:5',
            'konfirmasi_password' => 'required|same:password|min:5',
        ]);

        $password = bcrypt($request->password);

        User::where('email', $request->email)->update(['password' => $password]);
        // dd($tes);

        return redirect()->route('login_user')->with('success', 'Password berhasil dirubah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('mainpage');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}