<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use DB;
class Laporancontroller extends Controller
{
    //Menampilkan Jumlah Data: count()
    public function QB_laporan1(){
        $]RekProduk = DB::table('produks')->count();
        $]Rekkategori = DB::table('kategori')-count();

        return view('laporan.laporan1',[']RekProduk,']Rekkategori'=>$Rekkategori] );
    }
    public function qb_tugas2(){
        $id_kat = 3;
        $PData = DB::table('produks')->where('id_kat',$id_kat)->get();
        $JRek = DB::table('produks')->where('id_kat',$id_kat)->get();
        return view('praktikum9.tugas2',compact('PData','JRek','id_kat') );
      
    }
    public fuction qb_tugas3(){
       $id_kat = DB::table('produk')->get('id_kat',$id_kat)->get();
       $id_produk = D::table('produk')->get('id_kat',$id_produk)->get();
       return view('praktikum tugas3',compact('id_kat','id_produk') );

    }
}