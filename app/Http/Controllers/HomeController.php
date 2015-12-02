<?php

namespace App\Http\Controllers;

use Auth;
use Response;
use App\Votes;
use App\Candidates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$auth = Auth::user();

		if($this->checkVoteStatus($auth->username)->isEmpty()){
			$candidates = Candidates::all();
			return view('index', ['candidates' => $candidates]);
		}else{
			return view('index2');
		}
	}

	public function pick(Request $request)
	{
		$auth = Auth::user();
			if($this->checkVoteStatus($auth->username)->isEmpty() && $request->candidate_id != null){
				$vote = new Votes;
				$vote->username = $auth->username;
				$vote->candidate_id = $request->input('candidate_id');

				if($vote->save()){
					return Response::json(["message" => 'Data telah tersimpan, terima kasih atas partisipasi yang dilakukan']);
				}else{

					return Response::json(["message" => 'Terjadi kesalahan saat melakukan pemilihan kandidat, silahkan dicoba kembali']);
				}
			}
		return Response::json(["message" => 'Anda tidak memiliki hak karena telah melakukan vote sebelumnya']);
	}

	public function checkVoteStatus($username)
	{
		$vote = Votes::where(['username' => $username])->get();

		return $vote;
	}

}