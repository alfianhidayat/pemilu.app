<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Votes;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Candidates;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('votes')->count();
        return view('admin.layout.index', ['count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidates = Candidates::all();

        $votes = DB::table('votes')
            ->join('mahasiswa', 'votes.nim', '=', 'mahasiswa.nim')
            ->select('mahasiswa.nim', 'mahasiswa.nama', 'mahasiswa.kelas', 'mahasiswa.angkatan');

        $count = $votes->count();
        $count15 = DB::table('votes')
            ->join('mahasiswa', 'votes.nim', '=', 'mahasiswa.nim')
            ->select('mahasiswa.nim', 'mahasiswa.nama', 'mahasiswa.kelas', 'mahasiswa.angkatan')->where('angkatan', '39')->count();
        $count14 = DB::table('votes')
            ->join('mahasiswa', 'votes.nim', '=', 'mahasiswa.nim')
            ->select('mahasiswa.nim', 'mahasiswa.nama', 'mahasiswa.kelas', 'mahasiswa.angkatan')->where('angkatan', '38')->count();
        $count13 = DB::table('votes')
            ->join('mahasiswa', 'votes.nim', '=', 'mahasiswa.nim')
            ->select('mahasiswa.nim', 'mahasiswa.nama', 'mahasiswa.kelas', 'mahasiswa.angkatan')->where('angkatan', '37')->count();
        $count12 = DB::table('votes')
            ->join('mahasiswa', 'votes.nim', '=', 'mahasiswa.nim')
            ->select('mahasiswa.nim', 'mahasiswa.nama', 'mahasiswa.kelas', 'mahasiswa.angkatan')->where('angkatan', '36')->count();

        $coba = DB::select('SELECT candidate_id, DATE(created_at) as date, COUNT(nim) AS count FROM votes GROUP BY candidate_id, DATE(created_at) ORDER BY DATE(created_at), candidate_id');
        $quick = DB::select('SELECT candidate_id, COUNT(nim) AS count FROM votes GROUP BY candidate_id ORDER BY candidate_id');
        $angkatan = array('agk15' => $count15, 'agk14' => $count14,'agk13' => $count13,'agk12' => $count12);
        return view('admin.pages.count', ['count' => $count, 'angkatan' => $angkatan, 'coba' => $coba, 'quick'=>$quick,'candidates'=>$candidates]);
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
