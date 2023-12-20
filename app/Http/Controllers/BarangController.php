<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Fungsi ini menampilkan formulir untuk membuat barang baru dengan menggunakan view 'barang.create'.
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       //Fungsi store dalam konteks Laravel digunakan untuk menyimpan data baru ke dalam database. 

            //Validasi Form, kode memastikan bahwa data yang dikirimkan melalui formulir valid
            $request->validate([
                'kode_barang' => 'required',
                'nama_barang' => 'required',
                'jenis_varian' => 'required',
                'qty' => 'required|integer|min:1',
                'harga_jual' => 'required|numeric|min:0',
            ]);

            //Membuat dan Menyimpan Objek Barang
            $barang = Barang::create($request->all());

            //Menghitung Total Harga, Potongan Harga, dan Harga Dibayar
            $total_harga = $barang->qty * $barang->harga_jual;
            $potongan_harga = 0;

            if ($total_harga >= 500000) {
                $potongan_harga = $total_harga * 0.5;
            } elseif ($total_harga >= 200000) {
                $potongan_harga = $total_harga * 0.2;
            } elseif ($total_harga >= 100000) {
                $potongan_harga = $total_harga * 0.1;
            }
            
            $harga_dibayar = $total_harga - $potongan_harga;
            /*
             =>  Menghitung total harga dengan mengalikan jumlah barang (qty) dengan harga jual per barang.
             =>  Menghitung potongan harga berdasarkan aturan tertentu. Jika total harga lebih dari atau 
                 sama dengan 500,000, potongan harga adalah setengah dari total harga. Jika total harga 
                 lebih dari atau sama dengan 200,000, potongan harga adalah dua puluh persen dari total harga. 
                 Jika total harga lebih dari atau sama dengan 100,000, potongan harga adalah sepuluh persen dari total harga.
             =>  Menghitung harga yang harus dibayar setelah dipotong.
            */

            //Menampilkan View 'barang.show', Setelah semua perhitungan selesai, fungsi mengembalikan tampilan (view) 'barang.show' dengan membawa data-data yang telah dihitung melalui variabel compact.
           
            return view('barang.show', compact('barang', 'total_harga', 'potongan_harga', 'harga_dibayar'));  
   
        }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
