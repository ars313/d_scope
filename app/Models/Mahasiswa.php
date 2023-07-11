<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function scopeCumlaude($query){
        return $query->where('ipk', '>=', 3.5);
    }

    public function scopeLahir2000($query){
        return $query->whereYear('tanggal_lahir', '=', '2000');
    }
}
