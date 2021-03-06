<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Candidates;
use App\Votes;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layout.layout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidates = Candidates::all();
        $count = DB::table('votes')->count();
        $count15 = DB::table('votes')->where('angkatan', '2015')->count();
        $count14 = DB::table('votes')->where('angkatan', '2014')->count();
        $count13 = DB::table('votes')->where('angkatan', '2013')->count();
        $count12 = DB::table('votes')->where('angkatan', '2012')->count();

        $coba = DB::select('SELECT candidate_id, DATE(created_at) as date, COUNT(username) AS count FROM votes GROUP BY candidate_id, DATE(created_at) ORDER BY DATE(created_at), candidate_id');
        $quick = DB::select('SELECT candidate_id, COUNT(username) AS count FROM votes GROUP BY candidate_id ORDER BY candidate_id');
        $angkatan = array('agk15' => $count15,'agk14' => $count14,'agk13' => $count13,'agk12' => $count12);
        return view('admin.layout.index', ['count' => $count, 'angkatan' => $angkatan, 'coba' => $coba, 'quick'=>$quick,'candidates'=>$candidates]);
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
