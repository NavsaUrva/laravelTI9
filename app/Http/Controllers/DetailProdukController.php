<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB;

class DetailProdukController extends Controller
{
    public function index()
    {
        // $kategori_produk = KategoriProduk::all();
        //perintah ini menggunakan eloquent
        // $kategori_produk = DB::table('kategori_produk')->get();
        //perintah diatas menggunakan query builder
        $produk = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return view('detailproduk', compact('produk'));
    }
}