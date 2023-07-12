<?php

namespace App\Models;
use App\Models\Rooms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{   
    // protected $table='book';
    use HasFactory;
    // protected $fillable = ['class_id'];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }
}
