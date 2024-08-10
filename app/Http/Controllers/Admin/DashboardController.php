<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel layanan
        $layanans = Layanan::all();

        // Kirim data ke tampilan dashboard
        return view('vendor.backpack.dashboard', compact('layanans'));
    }
}
