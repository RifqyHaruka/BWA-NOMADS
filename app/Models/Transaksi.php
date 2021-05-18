<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaction';
    protected $fillable = ['travel_packages_id', 'users_id', 'addtional_visa', 'transaction_total', 'transaction_status'];

    protected $hidden=[];


    public function details(){
        return $this->hasMany(TransaksiDetail::class, 'transaction_id','id');
    }

    public function travel_packages(){
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id','id');
    }
}
