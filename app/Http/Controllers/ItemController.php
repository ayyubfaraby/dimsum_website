<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Models\Cart;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        $title = 'Menu Items'; // Definisikan variabel title
        return view('menu', compact('title')); // Kirim variabel $title ke tampilan
    }

 public function store(Request $request)
 {
     $items = $request->input('items', []);
 
     foreach ($items as $item) {
         if (!empty($item['jumlah']) && $item['jumlah'] > 0) {
             // Simpan data ke tabel carts
             Cart::create([
                 'nama' => $item['nama'],
                 'harga' => $item['harga'],
                 'jumlah' => $item['jumlah'],
             ]);
         }
     }
 
     return redirect()->route('cart')->with('success', 'Items added to cart successfully.');
 }
 
 public function cart()
 {
     $carts = Cart::all(); // Mengambil semua data dari tabel carts
     return view('cart', compact('carts'));
 }
 
}

