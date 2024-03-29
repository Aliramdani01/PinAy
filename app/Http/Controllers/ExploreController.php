<?php

namespace App\Http\Controllers;


use App\Models\Foto;
use App\Models\Like;
use App\Models\Komentar;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function getdata(Request $request){
        if($request->cari !== 'null'){
            $explore = Foto::with('likefotos')->withCount(['likefotos', 'komentar'])->where('judul_foto', 'like','%'.$request->cari.'%')->paginate(6);
        } else {
            $explore = Foto::with('likefotos')->withCount(['likefotos', 'komentar'])->orderBy('id', 'desc' )->paginate(6);
        }
        return response()->json([
            'data' =>$explore,
            'statuscode' => 200,
            'idUser'     => auth()->user()->id
        ]);
    }

    public function likesfoto(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existingLike = Like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->first();
            if(!$existingLike){
                $dataSimpan = [
                    'foto_id'  => $request->idfoto,
                    'users_id'  => auth()->user()->id
                ];
                Like::create($dataSimpan);
            } else {
                Like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil si simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
    }

    public function getdatadetail(Request $request, $id){
        $dataDetailFoto  = Foto::with('user')->where('id', $id)->firstOrFail();
        return response()->json([
            'dataDetailFoto'  => $dataDetailFoto
        ],200);
    }


    public function ambildatakomentar(Request $request, $id){
        $ambilkomentar = Komentar::with('user')->where('foto_id', $id)->get();
        return response()->json([
            'data'  => $ambilkomentar
        ], 200);
    }
    public function kirimkomentar(Request $request){
        try {
            $request->validate([
                'idfoto'    => 'required',
                'isi_komentar' => 'required'
            ]);
            $dataStoreKomentar = [
                'foto_id'   => $request->idfoto,
                'users_id'   => auth()->user()->id,
                'isi_komentar' => $request->isi_komentar
            ];

            Komentar::create($dataStoreKomentar);

            return response()->json([
                'data'    => 'Data Berhasil di simpan'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json('Data komentar gagal di simpan', 500);
        }
    }
}


