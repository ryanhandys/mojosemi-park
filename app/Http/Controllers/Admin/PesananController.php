<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('admin.pesanan', compact('pesanan'));
    }
}
