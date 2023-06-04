<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambahuser()
    {
        $hasil = \DB::table('users')->insert(
            [
                'name' => "joni",
                'email' => "jonijoni@usu.ac.id",
                'password' => bcrypt('Teknologi')
            ]
        );
    }
    public function tambahuser2()
    {
        $user = new User;
        $user->name = "Putri";
        $user->email = "putri@usu.ac.id";
        $user->password = bcrypt('Informasi');
        $user->save();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function all()
    {
        $result = User::all();
        echo ($result[0]->id) . '<br>';
        echo ($result[0]->name) . '<br>';
        echo ($result[0]->email) . '<br>';
    }
    public function index()
    {
        $result = User::all();

        foreach ($result as $user) {
            echo ($user->id) . '<br>';
            echo ($user->name) . '<br>';
            echo ($user->email) . '<br>';
            echo '<hr>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::find(5);
        $user->email = "putriuhuy@gmail.com";
        $user->password = bcrypt('Fasilkom TI');
        $user->save();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}