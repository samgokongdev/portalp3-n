<?php

namespace App\Http\Controllers;
use App\Models\Summary_tepat_waktu;
use App\Models\Jt14h;
use App\Models\Jtw14h;
use App\Models\Rikjalan;
use App\Models\Lhpnow;
use App\Models\Konversi;
use App\Models\Summary_skp;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tepat = Summary_tepat_waktu::all();
        $jt14h = Jt14h::count();
        $jtw14h = Jtw14h::count();
        $rikjalan = Rikjalan::count();
        $jml_lhp = Lhpnow::count();
        $tot_konversi = Konversi::sum('konversi');
        $tot_skpkb = Summary_skp::sum('skpkb');
        // echo $tot_skpkb;
        return view('home', compact('tepat','jt14h','jtw14h','rikjalan', 'jml_lhp', 'tot_konversi','tot_skpkb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
