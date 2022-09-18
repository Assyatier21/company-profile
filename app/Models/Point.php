<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = "point";


    public function About()
    {
        return $this->belongsTo(About::class, 'id', 'about_id');
    }
}
