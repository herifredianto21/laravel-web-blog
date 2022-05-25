<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB; 
use Session;
use App\models\Artikel;
use App\models\Viewartikel;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $artikel =  Artikel::all()->take(3);
        //  $artikel = Artikel::where('id', $id)
        //                     ->where('kode_artikel', 'tagar')
        //                     ->first();
        // // dd($artikel);
        // return view('beranda', ['artikel' => $artikel]);
        
        

        // API article
        $response = Http::get('https://admincmiartikel.cmihospital.com/api/artikel/34/0/10');
        $data = $response->json();
        
        return view('beranda', [
            'artikel' => $artikel,
            'data' => $data
        ]);



        // server lokal

        $position = Location::get('https://'.$request->ip());
        $webVisitor = $position;
        $tanggals = date('Y-m-d');
        $tanggalLengkap = date("Y-m-d H:i:s");

        $pengunjungWeb = DB::table('pengunjung_webs')
                            ->select('*')
                            ->where('ip', '=', $webVisitor->ip)
                            ->where('tanggal', '=', $tanggals)
                            ->count();

        $responseBody = json_decode(file_get_contents("https://admincmiartikel.cmihospital.com/api/artikel/34/0/10"));

        if($pengunjungWeb > 0){
            return view('beranda', compact('responseBody'));
        } else{
            DB::table('pengunjung_webs')->insert([
                'ip' => $webVisitor->ip,
                'countryName' => $webVisitor->countryName,
                'regionName' => $webVisitor->regionName,
                'cityName' => $webVisitor->cityName,
                'tanggal' => $tanggals,
                'created_at' => $tanggalLengkap,
                'updated_at' => $tanggalLengkap
            ]);
            return view('beranda', compact('responseBody'));
        }
    }

    public function show($slug)
    {
        // $artikel = Artikel::find($id);
        // $response = Http::get('https://admincmiartikel.cmihospital.com/api/artikel/34/0/10/'.$slug);
        $response = Http::get('https://admincmiartikel.cmihospital.com/api/detail-artikel/34/'.$slug);
        $artikel = $response->json();
        // dd($artikel);

        $post_art =  Artikel::orderBy('created_at', 'DESC')->paginate(5);
        $related_post = Artikel::orderBy('created_at', 'DESC')->paginate(2);
        // dd($artikel);
        return view('artikel-detail', [
            'artikel' => $artikel,
            'post_art' => $post_art,
            'related_post' => $related_post
        ]);
    }

    public function showartikeldb($id)
    {
        $artikel = Artikel::find($id);

        $postKey = 'post_'.$artikel->id;
        if(!Session::has($postKey)){
            $artikel->increment('total_views');
            Session::put($postKey, 1);
        }

        return view('artikel-detail-db', [
            'artikel' => $artikel,
        ]);
    }

    public function artikelkesehatan()
    {   
        $response = Http::get('https://admincmiartikel.cmihospital.com/api/artikel/34/0/10');
        $artikel = $response->json();

        // $artikel =  Artikel::orderBy('created_at', 'DESC')->paginate(9);
        // $post_art =  Artikel::orderBy('created_at', 'DESC')->paginate(5);
        
        return view('artikel', [
            'artikel' => $artikel,
            // 'post_art' => $post_art
            
        ]);
    }

    public function artikelkesehatan_detail($slug)
    {
        $response = Http::get('https://admincmiartikel.cmihospital.com/api/detail-artikel/34/'.$slug);
        $artikel = $response->json();

        return view('artikel-detail', [
            'artikel' => $artikel,
        ]);
    }

    public function details($id)
    {
        // $artikel = DB::table('artikel', $id)->first()->id;
        // // dd($artikel);
        // return view('artikel-detail', ['artikel' => $artikel]);
        $response = Http::get('https://admincmiartikel.cmihospital.com/api/artikel/34/1/10'.$id);
        $datadetail = $response->json();
        // dd($datadetail);
        // return view('artikel-detail', compact('datadetail'));
        return view('artikel-detail', ['datadetail' => $datadetail]);
        
        // if ($dataar) {
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Detail Artikel!',
        //         'data'    => $dataar
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Artikel Tidak Ditemukan!',
        //         'data'    => ''
        //     ], 401);
        // }
    }

    // public function detailartikel($id)
    // {
    //     $res = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=2ab033121248444e82ebe2bc3c0599bc'. $id);
    //     $datadetail = $res->json();

    //     return view('detail-artikel', $datadetail);
    // }

    public function getpengunjungartikels(Request $request, $slug){
        
        // $response = Http::get('https://admincmiartikel.cmihospital.com/api/detail-artikel/34/'.$slug);
        // $artikel = $response->json();

        $response = Http::get('https://admincmiartikel.cmihospital.com/api/detail-artikel/34/'.$slug);
        $artikel = $response->json();

        $position = Location::get('https://'.$request->ip());
        $webVisitor = $position;
        $tanggals = date('Y-m-d');
        $tanggalLengkap = date("Y-m-d H:i:s");

        $pengunjungArtikel = DB::table('pengunjung_artikels')
                            ->select('*')
                            ->where('slug', '=', $artikel[0]['slug'])
                            ->where('ip', '=', $webVisitor->ip)
                            ->where('tanggal', '=', $tanggals)
                            ->count();


        // $responseBody = json_decode(file_get_contents("https://admincmiartikel.cmihospital.com/api/artikel/34/0/10"));

        if($pengunjungArtikel > 0){
            return view('artikel-detail', [
                'artikel' => $artikel,
            ]);
        } else{
            DB::table('pengunjung_artikels')->insert([
                'ip' => $webVisitor->ip,
                'slug' => $artikel[0]['slug'],
                'countryName' => $webVisitor->countryName,
                'regionName' => $webVisitor->regionName,
                'cityName' => $webVisitor->cityName,
                'tanggal' => $tanggals,
                'created_at' => $tanggalLengkap,
                'updated_at' => $tanggalLengkap
            ]);
            return view('artikel-detail', [
                'artikel' => $artikel,
            ]);
        }
        // return view('artikel-detail', [
        //     'artikel' => $artikel,
        // ]);
    }

    public function getwas(Request $request){

        $position = Location::get('https://'.$request->ip());
        $webVisitor = $position;
        $tanggals = date('Y-m-d');
        $tanggalLengkap = date("Y-m-d H:i:s");

        $pengunjungWa = DB::table('pengunjung_was')
                            ->select('*')
                            ->where('ip', '=', $webVisitor->ip)
                            ->where('tanggal', '=', $tanggals)
                            ->count();

        if($pengunjungWa > 0){
            return redirect('https://wa.me/+628119161166?text=Halo,%20CMI%20Hospital%20dan%20periksajantung.com,%20Saya%20ingin%20konsultasi.%0ANama:%20%0AAlamat:%20');
        } else{
            DB::table('pengunjung_was')->insert([
                'ip' => $webVisitor->ip,
                'countryName' => $webVisitor->countryName,
                'regionName' => $webVisitor->regionName,
                'cityName' => $webVisitor->cityName,
                'tanggal' => $tanggals,
                'created_at' => $tanggalLengkap,
                'updated_at' => $tanggalLengkap
            ]);
            return redirect('https://wa.me/+628119161166?text=Halo,%20CMI%20Hospital%20dan%20periksajantung.com,%20Saya%20ingin%20konsultasi.%0ANama:%20%0AAlamat:%20');
        }
    }

    // public function getgrafik(){
        
    //     $userData = Viewartikel::select(DB::raw("COUNT(*) as count"))
    //     ->whereYear('created_at', date('Y'))
    //     ->groupBy(DB::raw("Month(created_at)"))
    //     ->pluck('count');

    //     return view('/grafik', compact('userData'));

    // }

    public function pasien_store(Request $request)
    {
    //   $position = Location::get('https://'.$request->ip());
    //   $webVisitor = $position;
    //   $tanggals = date('Y-m-d');
    //   $tanggalLengkap = date("Y-m-d H:i:s");

    //   $sendPasienApiLink = "http://127.0.0.1:8008/api/data-pasien/store";
    //   $response = Http::post($sendPasienApiLink, [
    //     'nama' => $request->nama,
    //     'domisili' => $request->domisili,
    //     'umur' => $request->umur,
    //     'no_telp' => $request->no_telp,
    //     'keluhan' => $request->keluhan,
    //     'lama_penyakit' => $request->lama_penyakit,
    //     'ip' => $webVisitor->ip,
    //     'countryName' => $webVisitor->countryName,
    //     'regionName' => $webVisitor->regionName,
    //     'cityName' => $webVisitor->cityName,
    //     'ip_domain' => "periksajantung.com",
    //     'nama_penyakit' => "Jantung"
    //   ]);

      // DB::table('pasiens')->insert([
      //   'nama' => $request->nama,
      //   'domisili' => $request->domisili,
      //   'umur' => $request->umur,
      //   'no_telp' => $request->no_telp,
      //   'keluhan' => $request->keluhan,
      //   'lama_penyakit' => $request->lama_penyakit,
      //   'ip' => $webVisitor->ip,
      //   'countryName' => $webVisitor->countryName,
      //   'regionName' => $webVisitor->regionName,
      //   'cityName' => $webVisitor->cityName,
      //   'ip_domain' => "periksajantung.com",
      //   'nama_penyakit' => "Jantung"
      // ]);
      return view('registrasi-pasien');
    }

}
