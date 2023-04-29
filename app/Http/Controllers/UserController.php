<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('user')->get();
        
        // dd($datas);
        return view('user', [
            'datas' => $datas,
        ]);
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
        $request->validate([
            'username' => 'required|min:3|max:20|unique:user',
            'nidn' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'min:5|max:30|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required'
        ]);
        $datas = [
            'username' => $request->username,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'password' => $request->password,
            'level' => 'dosen',
            'confirm_password' => $request->confirm_password,
        ];
        $datas['password'] = bcrypt($datas['password']);
        // dd($datas);
        User::create($datas);
        
        return redirect()->back()->with('success', 'Register Successfull!');
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
    public function edit($id)
    {
        //
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
