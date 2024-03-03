<?php

namespace App\Models;

use App\Models\foto;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class like extends Model
{
    use HasFactory;
    protected $fillable =[
        'foto_id',
        'users_id',
    ];

    protected $table ='likefotos';

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function foto(){
        return $this->belongsTo(foto::class, 'foto_id'.'id');
    }
}
