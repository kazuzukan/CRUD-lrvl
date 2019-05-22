<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function add(){
        return view('add');
    }

    public function view(){
        //Take data form database
        $user = DB::table('users')->get();
        
        //send to view
        return view('view', ['user' => $user]);
    }

    public function store(Request $request){
        //insert to table
        DB::table('users')->insert([
            'name' => $request->Nama,
            'email' => $request->Email,
            'mobile' => $request->Mobile
        ]);
        //return
        return redirect('/perpus/view');
    }

    public function edit($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('edit', ['nama' => $user]);
    }

    public function update(Request $request){
        DB::table('users')->where('id',$request->Id)->update([
            'name' => $request->Nama,
            'email' => $request->Email,
            'mobile' => $request->Mobile
        ]);
        return redirect('/perpus/view')->with('alert','Updated!');
    
    }

    public function delete($id){    
        DB::table('users')->where('id',$id)->delete();
        return redirect('/perpus/view')->with('alert','Deleted!');
    }
}
