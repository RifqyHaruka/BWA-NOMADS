<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transaction";
    protected $fillable = ['travel_packages_id' , 'users_id', 'addtional_visa', 'transaction_total'];
    
}
