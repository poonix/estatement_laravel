<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $url= parse_url($_SERVER['REQUEST_URI']);

        parse_str($url['query'], $params);
        $pecah = explode("&", $url['query']);
        $idsdm = $pecah[0];
        $NIK = $pecah[1];
        $username = $pecah[2];
        $nama = $pecah[3];
        $email = $pecah[4];
        $username = substr($username, strpos($username, "=") + 1);
        $idsdm = substr($idsdm, strpos($idsdm, "=") + 1);
        $secret_code=strtoupper("$3cretc0d3".$username.",EVENT,".$idsdm);
        header('Content-Type: application/json');
        $data1 = json_decode(file_get_contents('http://182.23.52.249/Dummy/SSO_WebService/crosscheck.php?secret='.$secret_code.'&app_code=EVENT&username='.$username));
        $data = json_encode($data1);
        $json = json_decode($data, true);

        /*====================================================================
        GET DATA FROM API SSO
        ======================================================================*/
        $idsdm 				=$json['login'][0]['data'][0]['idsdm'];
        $nik 				=$json['login'][0]['data'][0]['nik'];
        $username 			=$json['login'][0]['data'][0]['username'];
        $email 				=$json['login'][0]['data'][0]['email'];
        $nama 				=$json['login'][0]['data'][0]['nama'];
        $posisinama			=$json['login'][0]['data'][0]['posisi_nama'];
        $posisisso			=$json['login'][0]['data'][0]['posisi_sso'];
        $posisisingkatan	=$json['login'][0]['data'][0]['posisi_singkatan'];
        $lokasikerja		=$json['login'][0]['data'][0]['lokasi_kerja'];
        $kodecabang			=$json['login'][0]['data'][0]['kode_cabang'];
        $cabang 			=$json['login'][0]['data'][0]['cabang'];
        $unit				=$json['login'][0]['data'][0]['unit'];
        $kode_unit			=$json['login'][0]['data'][0]['kode_unit'];
        $organisasiname		=$json['login'][0]['data'][0]['organisasi_name'];
        $organisasidesc		=$json['login'][0]['data'][0]['organisasi_desc'];
        $foto 				=$json['login'][0]['data'][0]['foto'];


        $request->session()->put('logged_in', true);
        $request->session()->put('idsdm', $idsdm);
        $request->session()->put('nik', $nik);
        $request->session()->put('username', $username);
        $request->session()->put('email', $email);
        $request->session()->put('nama', $nama);
        $request->session()->put('posisi_nama', $posisinama);
        $request->session()->put('posisi_sso', $posisisso);
        $request->session()->put('posisi_singkatan', $posisisingkatan);
        $request->session()->put('lokasi_kerja', $lokasikerja);
        $request->session()->put('kodecabang', $kodecabang);
        $request->session()->put('cabang', $cabang);
        $request->session()->put('unit', $unit);
        $request->session()->put('kode_unit', $kode_unit);
        $request->session()->put('organisasi_name', $organisasiname);
        $request->session()->put('organisasi_desc', $organisasidesc);
        $request->session()->put('foto', $foto);

        return redirect('print_session');
    }

    public function print(Request $request)
    {
        $value = $request->session()->get('posisi_sso');
        print_r($value);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('logged_in');
        $request->session()->forget('idsdm');
        $request->session()->forget('nik');
        $request->session()->forget('username');
        $request->session()->forget('email');
        $request->session()->forget('nama');
        $request->session()->forget('posisi_nama');
        $request->session()->forget('posisi_sso');
        $request->session()->forget('posisi_singkatan');
        $request->session()->forget('lokasi_kerja');
        $request->session()->forget('kodecabang');
        $request->session()->forget('cabang');
        $request->session()->forget('unit');
        $request->session()->forget('kode_unit');
        $request->session()->forget('organisasi_name');
        $request->session()->forget('organisasi_desc');
        $request->session()->forget('foto');
        $request->session()->flush();

         return redirect('/');
    }
}