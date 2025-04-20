<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; 

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');
        $waktuAkses = Carbon::now()->format('H:i:s');
        $nama = "Neilson Tristant"; 
        $jam = date("H:i:s");

        $hour = date("H");
        if ($hour >= 5 && $hour <= 11) {
            $salam = "Selamat Pagi";
        } elseif ($hour >= 12 && $hour <= 14) {
            $salam = "Selamat Siang";
        } elseif ($hour >= 15 && $hour <= 17) {
            $salam = "Selamat Sore";
        } else {
            $salam = "Selamat Malam";
        }

        $tanggal = $this->getTanggal();

        return view('dashboard', compact('nama', 'salam', 'jam', 'tanggal', 'waktuAkses'));
    }

    private function getTanggal()
    {
        // ==================3==================
        return date("d-m-Y");
    }
}
