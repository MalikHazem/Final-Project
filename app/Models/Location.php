<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Painting;

class Location extends Model
{
    use HasFactory;
    protected $table = "location";
    protected $fillable = ['location'];

    public function paintings(){
        return $this->hasMany(Painting::class);
    }
}
