<?php

namespace App\Models;

use App\Models\like;
use App\Models\User;
use App\Models\komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class foto extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $table ='fotos';

    public function user(){
        return $this->belongsTo(User::class, 'users_id','id');
    }

    public function albums(){
        return $this->belongsTo(Album::class, 'album_id','id');
    }

    public function likefotos(){
        return $this->hasMany(like::class, 'foto_id','id');
    }

    public function komentar(){
        return $this->hasMany(komentar::class, 'foto_id','id');
    }

}
