<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Painting;

class Preview extends Model
{
    use HasFactory;
    protected $table = "_previews";

    protected $fillable=[
        "user_id",
        "painting_id",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paintings(){
        return $this->hasMany(Painting::class);
    }
}
