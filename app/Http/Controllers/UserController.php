<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('user.index', [
            "title" => 'User',
            "data" => User::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6',
            'posision' => 'required',
            'role' => 'required',
        ]);
    
        $validateData['password'] = bcrypt($validateData['password']);
    
        try {
            User::create($validateData);
            return redirect('/user')->withSuccess('Berhasil tambah data user!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Email sudah terdaftar!']);
        }
    
    }

    public function delete(Request $request){

        User::destroy($request->id);

        return redirect('/user')->withSuccess('Berhasil hapus data user!');
    }

    public function edit(Request $request){

        $item = User::find($request->id);
    
        return view('edit_modal_content', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $rules = [];

        $allNull = true;
        foreach ($request->all() as $value) {
            if ($value !== null) {
                $allNull = false;
                break;
            }
        }

        if ($allNull) {
            return redirect('/user')->withSuccess('Berhasil update data user!');
        }

        $user = User::find($id);

        if($request['email'] && $request['email'] != $user['email']){
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if($request['name'] && $request['name'] != $user['name']){
            $rules['name'] = 'required|min:3';
        }

        if($request['password'] && $request['password'] != $user['password']){
            $rules['password'] = 'required|min:6';
        }

        $validateData = $request->validate($rules);

        if($request['password']){
            $validateData['password'] = bcrypt($validateData['password']);
        }

        User::where('id', $id)-> update($validateData);

        return redirect('/user')->withSuccess('Berhasil update data user!');
    }

}
