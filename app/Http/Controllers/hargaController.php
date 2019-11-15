<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\harga;

class hargaController extends Controller
{
	public function tambah()
	{
	// memanggil view tambah
	return view('tambah');
	}

    public function index()
    {
		// mengambil data dari table harga
		
	$harga = harga::all();
	   return view('harga',['harga' => $harga]);
	
    }

    public function store(Request $request)
	{
	// insert data ke table harga
	DB::table('harga')->insert
	([
		
		'nama_pangan' => $request->nama_pangan,
		'harga' => $request->harga,
		'satuan' => $request->satuan,
		
	]);

	// alihkan halaman ke halaman harga
	return redirect('/home');
	}

	public function updates(Request $request)
	{
	DB::table('harga')->where('id_harga',$request->id)->update
	([
		
		'nama_pangan' => $request->nama_pangan,
		'harga' => $request->harga,
		'satuan' => $request->satuan,
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/home');
	}

	public function hapus($id)
	{
	// menghapus data harga berdasarkan id yang dipilih
	DB::table('harga')->where('id_harga',$id)->delete();
	// alihkan halaman ke halaman pegawai
	return redirect('/home');
	}

}
