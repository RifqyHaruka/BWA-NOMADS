<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaction_details';
    protected $fillable = ['transaction_id','username','nationality','is_visa','doe_passport'];
    protected $hidden = [];

    public function transaction(){
        return $this->BelongsTo(Transaksi::class,'transaction_id','id');
    }
}
