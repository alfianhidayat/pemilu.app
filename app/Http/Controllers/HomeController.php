<?php

namespace App\Http\Controllers;

use Auth;
use Response;
use App\Votes;
use App\Mahasiswa;
use App\Candidates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $request;

	public function __construct(Request $request)
	{
		$this->middleware('auth', ['except' => ['getLogin', 'postLogin', 'getLogout']]);
		$this->request = $request;
	}

	public function index()
	{
		$authDetail = $this->request->session()->get('AuthDetails');

		if($this->checkVoteStatus($authDetail->nim)->isEmpty()){
			$candidates = Candidates::all();
			return view('index', ['candidates' => $candidates]);
		}else{
			return view('index2');
		}
	}

	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');

		$result = json_decode($this->getValidation($username, $password));

		if($result->status){
			$kelas = $this->parseKelas($result->kelas);

			$mhs = Mahasiswa::firstOrCreate([
				'nim' => $result->nim,
				'nama' => $result->nama,
				'kelas' => $result->kelas,
				'angkatan' => $kelas
				]);

			$request->session()->put('Auth', true);
			$request->session()->put('AuthDetails', $result);
			return redirect('/');
		}else{
			return redirect('auth/login');
		}
	}

	public function getLogout(Request $request)
	{
		$request->session()->flush();

		return redirect('/');
	}

	public function pick(Request $request)
	{
		$authDetail = $this->request->session()->get('AuthDetails');

		if($this->checkVoteStatus($authDetail->nim)->isEmpty() && $request->candidate_id != null){

			$candidates = Candidates::where(['id' => $request->candidate_id])->get();
			if(!$candidates->isEmpty()){
				$vote = new Votes;
				$vote->nim = $authDetail->nim;
				$vote->candidate_id = $request->candidate_id;

				if($vote->save()){
					return Response::json(["message" => 'Data telah tersimpan, terima kasih atas partisipasi yang dilakukan']);
				}else{
					return Response::json(["message" => 'Terjadi kesalahan saat melakukan pemilihan kandidat, silahkan dicoba kembali']);
				}
			}else{
				return Response::json(["message" => 'Terjadi kesalahan saat melakukan pemilihan kandidat, silahkan dicoba kembali']);
			}
		}
		return Response::json(["message" => 'Anda tidak memiliki hak karena telah melakukan vote sebelumnya']);
	}

	public function checkVoteStatus($nim)
	{
		$vote = Votes::where(['nim' => $nim])->get();

		return $vote;
	}

	public function parseKelas($kelas)
	{
		return explode("-", $kelas)[1];
	}

	public function getValidation($username, $password)
	{
		$fields = array(
			'textUsername' => urlencode($username),
			'textPassword' => urlencode($password),
			'submit'=> urlencode('Login')
			);

		$fields_string = "";

		foreach($fields as $key=>$value) { 
			$fields_string .= $key.'='.$value.'&'; 
		}

		rtrim($fields_string, '&');

		$cookiejar = '/tmp/cookie/'. $fields['textUsername'].".data";

		// Login the user
		$ch = curl_init('https://igracias.telkomuniversity.ac.id');
		curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookiejar);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_exec ($ch);

		$fp = fopen('/tmp/data.txt', 'a');
		fwrite($fp, $fields_string . "\r\n");
		fclose($fp);

		// Get the users details
		$ch = curl_init('https://igracias.telkomuniversity.ac.id/index.php?pageid=2941');
		curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookiejar); 
		curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookiejar); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		$data = preg_replace("/\n/", "", curl_exec ($ch));
		$data = preg_replace("/\t/", "", $data);

		preg_match("/<div style=\"width:80%;float:left;\">(.*?)(<\/div>|$)/", $data, $matches);
		if(count($matches)>2){
			preg_match("/<h3 style=\"color:#fff;\">(.*?)(<\/h3>|$)/", $matches[1], $nama);
			preg_match("/<h5 style=\"color:#fff;\">(.*?)(<\/h5>|$)/", $matches[1], $kelas);
			$classes = explode(" ", $kelas[1]);
			$myData = array(
				'status' => true,
				'nama' => $nama[1],
				'nim' => $classes[0],
				'kelas' => $classes[1]
				);

			return json_encode($myData);
		}else{
			$myData = array(
				'status' => false
				);
			return json_encode($myData);
		}
	}

}