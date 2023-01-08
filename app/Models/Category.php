<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Painting;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = ['name'];

    public function paintings(){
        return $this->hasMany(Painting::class);
    }
}
