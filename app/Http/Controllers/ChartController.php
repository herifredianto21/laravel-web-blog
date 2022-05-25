<?php

namespace App\Http\Controllers;
use App\Models\Viewartikel;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewartikels = Viewartikel::select(DB::raw("COUNT(*) as count"))
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(DB::raw("Month(created_at)"))
                            ->pluck('count');
                            
        $months = Viewartikel::select(DB::raw("COUNT(*) as count"))
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(DB::raw("Month(created_at)"))
                            ->pluck('count');
        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month) {
            $datas[$month] = $viewartikels[$index];
        }
        
        return view('grafik', compact('datas'));
    }

    // public function viewsWa()
    // {
    //     $viewwas = Viewartikel::select(DB::raw("COUNT(*) as count"))
    //                         ->whereYear('created_at', date('Y'))
    //                         ->groupBy(DB::raw("Month(created_at)"))
    //                         ->pluck('count');
                            
    //     $months = Viewartikel::select(DB::raw("COUNT(*) as count"))
    //                         ->whereYear('created_at', date('Y'))
    //                         ->groupBy(DB::raw("Month(created_at)"))
    //                         ->pluck('count');
        
    //     $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    //     foreach ($months as $index => $month) {
    //         $datas[$month] = $viewartikels[$index];
    //     }
        
    //     return view('grafik', compact('datas'));
    // }

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
