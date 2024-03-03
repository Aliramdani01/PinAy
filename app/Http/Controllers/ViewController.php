<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index(Request $request){
        return view('page.index');
    }

    public function sign_in(Request $request){
        return view('page.login');
    }

    public function sign_up(Request $request){
        return view('page.Register');
    }

    public function explore(Request $request){
        $user = auth()->user();
        return view('page.explore', compact('user'));
    }
    public function upload(Request $request){
        $user = auth()->user();
        $albums = Album::where('users_id', Auth::user()->id)->get();
        return view('page.upload', compact('albums', 'user'));
    }

    public function profile(Request $request){
        $user = auth()->user();
        return view('page.myprofile', compact('user'));
    }
    public function detail(Request $request){
        $user = auth()->user();
        return view('page.detail', compact('user'));
    }
    public function userlain(Request $request){
        $user = auth()->user();
        return view('page.userlain', compact('user'));
    }
    public function ubahpassword(Request $request){
        $user = auth()->user();
        return view('page.ubahpassword', compact('user'));
    }
    public function ubahprofle(Request $request){
        $user = auth()->user();
        return view('page.ubahprofile', compact('user'));
    }
    public function album(Request $request){
        $user = auth()->user();
        $albums = Album::where('users_id', Auth::user()->id)->get();
        return view('page.album', compact('user', 'albums'));
    }
    public function buatalbum(Request $request){
        $user = auth()->user();
        return view('page.buatalbum', compact('user'));
    }
    public function editfoto(Request $request, $id){
        $user = auth()->user();
        $albums = Album::where('users_id', Auth::user()->id)->get();
        $foto = foto::find($id);
        return view('page.edit-foto', compact('user', 'albums','foto'));}

}

