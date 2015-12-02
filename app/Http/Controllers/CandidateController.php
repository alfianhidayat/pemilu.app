<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Candidates;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidates::all();
        return view('admin.pages.index')->withCandidates($candidates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'no_urut' => 'required',
            'tagline' => 'required',
            'ketua' => 'required',
            'wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'photos' => 'required',
        ]);


        $input = $request->all();

        if ($request->hasFile('photos')) {
            $file1 = $request->file('photos');
            $extension = $file1->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $input['photos'] = $fileName;
            $file1->move('../public/uploads/image', $fileName);
        } else {
            echo 'Has not any file!';
        }

        Candidates::create($input);

        return redirect()->back();
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
        $candidate = Candidates::findOrFail($id);
        return view('admin.pages.edit')->withCandidate($candidate);
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
            $candidate = Candidates::findOrFail($id);

           $this->validate($request, [
            'no_urut' => 'required',
            'tagline' => 'required',
            'ketua' => 'required',
            'wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'photos' => 'required',
        ]);


        $input = $request->all();

        if ($request->hasFile('photos')) {
            $file1 = $request->file('photos');
            $extension = $file1->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $input['photos'] = $fileName;
            $file1->move('../public/uploads/image', $fileName);
        } else {
            echo 'Has not any file!';
        }

            $candidate->fill($input)->save();

            return redirect('admin/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $candidate = Candidates::findOrFail($id);

        $candidate->delete();

        return redirect()->back();
    }
}
