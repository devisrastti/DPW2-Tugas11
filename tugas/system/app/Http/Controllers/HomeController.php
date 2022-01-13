<?php

namespace App\Http\Controllers;


class HomeController extends Controller{

	function showDashboard(){
		return view('dashboard');
	}

	function showProduct(){
		return view('admin.produk');
	}

	function showCategory(){
		return view('admin.kategori');
	}

	function showLogin(){
		return view('admin.login');
	}

	function showRegistrasi(){
		return view('admin.registrasi');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'Armchair'){
			echo "Tampilkan Produk Armchair";
		}elseif($produk == 'Meja Rias'){
			echo "Produk Meja Rias";
		}
		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>";
		echo "Harga Max adalah $hargaMax <br>";
	}

	public function testCollection()
	{
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();
		
		//sorting
		//sort by harga terendah 
		//dd($list_produk->sortBy('harga'));
		//sort By harga tertinggi 
		//dd($list_produk->sortByDesc('harga'));
		$data['list'] = $list_produk;
		return view('test-collection', $data);

		
		//take
		//skip
	}
}