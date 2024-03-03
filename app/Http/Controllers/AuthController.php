<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trigerlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('register');
    }

    public function registered(request $request){

        $pesan = [
            'username.required'   => 'Username Sudah Terpakai',
            'email.unique'        => 'Email Sudah Terpakai',
            'email.required'      => 'Email Sudah Terpakai',
            'username.unique'     => 'Username Sudah Terpakai',
            'username.required'   => 'Silahkan Masukan Username',
            'email.required'      => 'Silahkan Masukan Email',
            'password.min'        => 'Password minimal 8 karakter',
            'password.required'   => 'Password Wajib Di Isi'
        ];
        $request->validate([
            'username'   => 'required|unique:users,username',
            'email'      => 'required|unique:users,email',
            'password'   => 'required|min:8',
        ],$pesan);
        $fotoFile = $request->file('picture');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName   = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/assets'), $fotoName);

        $dataStore = [
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'picture'    => $fotoName
        ];
        User::create($dataStore);
        return redirect('/register')->with('success', 'Data berhasil di simpan');
    }

    public function auth(Request $request){
        $pesan = [
            'email.unique'       => 'Silahkan Masukkan Email',
            'email.required'    => 'Silahkan Masukkan Email',
            'password.min'    => 'Password Minimal 8 Karakter',
            'password.required' => 'Password Harus Di Isi'
        ];
        $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:8'
            
        ],$pesan);

        if(Auth::attempt(['email' => $request->email, 'password' =>$request->password])){
            $request->session()->regenerate();
            return redirect('/home')->with('success','Anda Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }

    public function logout(Request $request){
          //Ambil user yang sedang login
          $user = Auth::user();
          //Hapus data Trigerlogin jika ada
          if($user){
              Trigerlogin::where('users_id', $user->id)->delete();
          }
          Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/')->with('success','Anda Berhasil Logout');
        }
}
