<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi_count = Transaksi::count();
        $omzet = Transaksi::sum('total_harga');
        $item_count = TransaksiDetail::sum('jumlah');
        return view('dashboard', compact('transaksi_count', 'omzet', 'item_count'));
    }
}
