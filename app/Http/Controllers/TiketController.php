<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\MidtransController;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        return view('tiket');
    }

    public function pesan()
    {
        return view('pesan');
    }

    public function simpan(Request $request)
    {
        $pesanan = new Pesanan();
        $pesanan->user_id = auth()->user()->id;
        $pesanan->alamat = $request->alamat;
        $pesanan->tanggal = $request->tanggal;
        $pesanan->jumlah = $request->quantity;
        $pesanan->total = $request->total;
        $pesanan->save();
        $token = MidtransController::midtrans($request->total);
        return redirect()->back()->with(['token' => $token, 'id' => $pesanan->id]);
    }

    public function bayar(Request $request)
    {
        $json = json_decode($request->json);
        $pesanan = Pesanan::find($request->id);
        $pesanan->status = $json->transaction_status;
        $pesanan->save();
        $transaksi = new Transaksi();
        $transaksi->biaya = $json->gross_amount;
        $transaksi->tipe_pembayaran = $json->payment_type;
        $transaksi->status_transaksi = $json->transaction_status;
        $transaksi->bank = $json->va_numbers[0]->bank ?? null;
        $transaksi->nomor_va = $json->va_numbers[0]->va_number >> null;
        $transaksi->pdf_url = $json->pdf_url;
        $transaksi->transaction_id = $json->transaction_id;
        $transaksi->pemesanan_id = $request->id;
        $transaksi->save();

        return redirect()->route('home');
    }
}
