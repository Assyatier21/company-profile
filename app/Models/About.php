<?php

namespace App\Models;

use App\Models\Point;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $table = "about";

    public function Point()
    {
        return $this->hasMany(Point::class, 'about_id', 'id')->whereFlag(1);
    }
}
