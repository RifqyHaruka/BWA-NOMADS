<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Transaction;
use App\Models\Transaksi;
use App\Models\TravelPackages;

class DashboardController extends Controller
{
    
    public function index(Request $request){
        $paketTravel = TravelPackages::count();
        $Transaksi = Transaksi::count();
        $Success = Transaksi::where('transaction_status','SUCCESS')->count();
        $Pending = Transaksi::where('transaction_status','PENDING')->count();
        return view('pages.admin.dashboard',['paketTravel'=>$paketTravel , 'Transaksi'=>$Transaksi, 'Success'=>$Success, 'Pending'=>$Pending]);
    }
    
}
