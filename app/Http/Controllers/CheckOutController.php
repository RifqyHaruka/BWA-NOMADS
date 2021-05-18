<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Http\Requests\Admin\Travel_Packages_Model;
use App\Models\Admin\Transaction;
use App\Models\TransaksiDetail;
use App\Models\TravelPackages;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
    
    }

    public function cobaIndex(Request $request, $id){
    $item = Transaksi::with(['details','travel_packages','user'])->findOrFail($id);

        return view('pages.user.checkout', ['item'=>$item]);
    }

    public function process(Request $request,$id){
        $travel_package = TravelPackages::findOrFail($id);

        $transaction = Transaksi::create([
            'travel_packages_id'=>$id,
            'users_id'=> Auth::user()->id,
            'addtional_visa'=>0,
            'transaction_total'=>$travel_package->price,
            'transaction_status'=> 'IN_CART'
        ]);

         TransaksiDetail::create([
             'transaction_id'=> $transaction->id,
             'username'=>Auth::user()->name,
             'nationality'=> 'ID',
             'is_visa'=>false,
             'doe_passport'=>Carbon::now()->addYears(5)
         ]);

         return redirect()->route('checkout', $transaction->id);
    }


    public function remove(Request $request,$detail_id){
        //remove
        $item = TransaksiDetail::findOrFail($detail_id);

        $transaction = Transaksi::with(['details','travel_packages'])->findOrFail($item->transaction_id);
         if($item->is_visa){
            $transaction->transaction_total -= 190;
            $transaction->addtional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_packages->price;
        $transaction->save();

        $item->delete();

        return redirect()->route('checkout',$item->transaction_id);


    }

    public function success(Request $request,$id){
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = "PENDING";

        $transaction->save();

        return view('pages.user.dashboard');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $request->validate([
            'username'=>'required|string|exists:transaction_details,username',
            'is_visa'=>'required|boolean',
             'doe_passport'=>'required'       
        ]);

        
        $data = $request->all();
        $data['transaction_id'] = $id;

        TransaksiDetail::create($data);

        $transaction=Transaksi::with(['travel_packages'])->find($id);
        
        if($request->is_visa){
            $transaction->transaction_total += 190;
            $transaction->addtional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travel_packages->price;
        $transaction->save();

        return redirect()->route('checkout', $id);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
