<?php

namespace App\Http\Controllers;


use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function storeFoto(Request $request){
        $request->validate([
            'url'               =>  'required',
            'judul_foto'        => 'required',
            'deskripsi_foto'    => 'required'
        ]);

        $fotoFile = $request->file('url');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName   = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/assets'), $fotoName);

        $dataFoto = [
            'album_id'          => $request->album,
            'url'               => $fotoName,
            'judul_foto'        => $request->judul_foto,
            'deskripsi_foto'    => $request->deskripsi_foto,
            'users_id'           => Auth::user()->id,
        ];
        foto::create($dataFoto);
        return redirect()->back()->with('success', 'Foto Berhasil di Upload');}
}