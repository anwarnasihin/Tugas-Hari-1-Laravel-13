<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Menyusun array dummy multi-dimensi. Setiap elemen di dalam array $tasks merepresentasikan sebuah tugas dengan atribut id, title, description, status, dan priority.
        $tasks = [
            [
                'id' => 1,
                'title' => 'Slicing UI Dashboard',
                'description' => 'Mengerjakan slicing halaman dashboard menggunakan utility class Tailwind CSS.',
                'status' => 'doing',
                'priority' => 'high',
            ],
            [
                'id' => 2,
                'title' => 'Integrasi Layout Blade',
                'description' => 'Memisahkan susunan navbar ke dalam induk layout app.blade.php.',
                'status' => 'done',
                'priority' => 'medium',
            ],
            [
                'id' => 3,
                'title' => 'Membuat Form Tambah Tugas',
                'description' => 'Membuat struktur form input baru lengkap dengan proteksi @csrf.',
                'status' => 'todo',
                'priority' => 'low',
            ],
        ];

        // Mengirimkan data array $tasks ke view tasks.index
        return view('tasks.index', compact('tasks'));
    }

    // Method untuk menampilkan halaman form tambah tugas
    public function create()
    {
        return view('tasks.create');
    }
}
