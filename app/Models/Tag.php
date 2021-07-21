<?php

namespace App\Models;

use App\Http\Controllers\PostController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // relation
    public function post(){
        return $this->belongsToMany(PostController::class);
    }
}
