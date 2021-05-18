<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galleries extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'galleries';
    protected $fillable = ['travel_packages_id','image'];
    

    public function travel_packages(){
        //relasi
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id'); //Kalau error trying to get property of null cek di semua yang berhubungan dengan datbaase mulai dari model sampai request nya
        
    }
}

