<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\like;
use App\Models\User;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function getdatapin(Request $request, $id){
        $dataUser = User::where('id', $id)->first();
        return response()->json([
            'dataUser'      => $dataUser
        ], 200);
    }

    public function getdata(Request $request){
        $explore = foto::with('likefotos')->withCount(['likefotos', 'komentar'])->latest('id', 'desc')->paginate(6);
        return response()->json([
            'data' =>$explore,
            'statuscode' => 200,
            'idUser'     => auth()->user()->id
        ]);
    }

    public function likesfotos(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existingLike = like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->first();
            if(!$existingLike){
                $dataSimpan = [
                    'foto_id'  => $request->idfoto,
                    'users_id'  => auth()->user()->id
                ];
                like::create($dataSimpan);
            } else {
                like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil si simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
    }
}


