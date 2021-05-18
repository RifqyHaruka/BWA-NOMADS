<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Galleries as AdminGalleries;
use App\Models\Admin\Transaction;
use App\Models\Galleries;
use App\Models\TravelPackages;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Galleries::with('travel_packages')->get();

        return view('pages.admin.Galleries.index',['items'=> $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackages::all();
      
        return view('pages.admin.Galleries.create',['travel_packages'=>$travel_packages]);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminGalleries $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/gallery','public');

        Galleries::create($data);
        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Galleries::findOrFail($id);
        $travel_packages = TravelPackages::all();
        // $travel = Galleries::with(['travel_packages.galleries'])->whereHas('travel_packages_id',function($id){
        //     $id->where('id','id');
        // });
        

        return view('pages.admin.Galleries.edit',['items'=>$items, 'travel_packages'=>$travel_packages]);
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
        $data = $request->all();
        $data['image'] = $request->file('image')->store("assets/gallery",'public');
        $item = Galleries::findOrFail($id);
        $item->update($data);

        return redirect()->route('galleries.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Galleries::findOrFail($id);
        
        $items->delete();
        return redirect()->route('galleries.index');
    }
}
