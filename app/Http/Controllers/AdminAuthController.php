<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Mail\SendHtmlEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin;
use App\Models\User;
use App\Models\Pengaduan;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function postingan()
    // {
    //     $user = user::select('nama', 'nik', 'email', 'no_hp', 'id')->get();
    //     return view('admin.admin', compact('user'));
    // }
    public function admin()
    {
        $user = User::select('nama', 'nik', 'email', 'no_hp', 'id')->get();
        return view('admin.data', compact('user'));
    }
    public function pengaduan()
    {
        $pengaduan = Pengaduan::with('user')->get();
        return view('admin.pengaduan', compact('pengaduan'));
    }
    public function pengaduan_masuk()
    {
        $pengaduan = Pengaduan::where('pengaduans.status_laporan', '=', 0)
        ->get();
        
        return view('admin.pengaduan_masuk', compact('pengaduan'));
    }
    public function pengaduan_process()
    {
        $pengaduan = Pengaduan::where('pengaduans.status_laporan', '=', 1)
        ->get();
        
        return view('admin.pengaduan_process', compact('pengaduan'));
    }
    public function detail_pengaduan($id)
    {
        $pengaduan = Pengaduan::find($id)->first();
        
        return view('admin.detail_pengaduan', compact('pengaduan'));
    }
    public function ubah_status_selesai(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id)->first();
        $pengaduan-> status_laporan = $request->status_laporan;
        $pengaduan->save();
        $email = new SendHtmlEmail();
        $recipientEmail = $pengaduan->user->email ;
        Mail::to($recipientEmail)->send($email);
        return redirect()->route('admin.pengaduan')->with('edit_status', 'Pengajuan telah diselesaikan');
    }
    public function ubah_status_proses(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id)->first();
        $pengaduan-> status_laporan = $request->status_laporan;
        $pengaduan->save();
        return redirect()->route('admin.pengaduan')->with('edit_status', 'Pengajuan telah diproses');
    }
    public function ubah_status_tolak(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id)->first();
        $pengaduan-> status_laporan = $request->status_laporan;
        $pengaduan->save();
        return redirect()->route('admin.pengaduan')->with('edit_status', 'Pengajuan telah diproses');
    }
    public function pengaduan_selesai()
    {
        $pengaduan = Pengaduan::where('pengaduans.status_laporan', '=', 2)
        ->get();
        
        return view('admin.pengaduan_selesai', compact('pengaduan'));
    }
    public function login()
    {
        return view('login_admin');
    }
    public function login_logic(request $request)
    {
        // dd($request->all());
        $request->validate(([
            'email' => 'required',
            'password' => 'required',
        ]));

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // $t = Auth::attempt($data);
        // dd($t);
        // if(Auth::attempt($data)){
        //     return redirect()->route('mainpage');
        // }else{
        //     return redirect()->route('login.admin')->with('failed', 'Email atau password salah');
        // }

        if (Auth::guard('admin')->attempt($data)) {
            $request->session()->regenerate();
            $user = Auth::guard('admin')->user();
            // dd($request);
            return redirect()->route('admin',compact('user'));

        } elseif (Auth::guard('web')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('mainpage');
        } else {
            return redirect()->route('login.admin')->with('failed', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('mainpage');
    }
    public function index()
    {
        //
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