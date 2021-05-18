<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Travel_Packages_Model;
use App\Models\Admin\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TravelPackages;

class TravelPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = TravelPackages::all();
      return view('pages.admin.Travel_Packages.travel_packages', ['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Travel_Packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Travel_Packages_Model $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackages::create($data);

        return redirect()->route('travel.index');
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
        $travel = TravelPackages::findOrFail($id);

        return view('pages.admin.Travel_Packages.edit', ['travel'=>$travel]);
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

        $item = TravelPackages::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackages::findOrFail($id);
        
        $item->galleries()->delete();
        $item->delete();
        return redirect()->route('travel.index');

    }
}
