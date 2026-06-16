<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menyusun data dummy awal berisi 4 parameter status.
        $stats = [
            'total_tasks'   => 12,
            'in_progress'   => 4,
            'selesai'       => 5,
            'terlambat'     => 3,
        ];

        // Mengirimkan data $stats ke dalam file view 'dashboard'
        return view('dashboard', compact('stats'));
    }
}
