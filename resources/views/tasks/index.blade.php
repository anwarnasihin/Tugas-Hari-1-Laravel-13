@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold text-gray-900">Daftar Tugas</h1>
        {{-- Tombol tambah tugas (untuk Latihan 4 nanti) --}}
        <a href="{{ route('tasks.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm transition-colors">
    + Tambah Tugas
        </a>
    </div>

    {{-- LIST BOX CONTAINER --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="divide-y divide-gray-200">

            {{-- PERULANGAN BLADE @forelse --}}
            @forelse($tasks as $task)
                <div class="p-4 hover:bg-gray-50 flex justify-between items-start gap-4 transition-colors">
                    <div>
                        <h3 class="font-semibold text-gray-900 text-sm sm:text-base">{{ $task['title'] }}</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ $task['description'] }}</p>
                    </div>

                    {{-- IMPLEMENTASI KOMPONEN BLADE LATIHAN 5 --}}
                    <div class="flex gap-1.5 flex-shrink-0">
                        <x-status-badge :status="$task['status']" />
                        <x-priority-badge :priority="$task['priority']" />
                    </div>
                </div>
            @empty
                {{-- Tampilan otomatis jika array $tasks kosong --}}
                <div class="p-8 text-center text-gray-500 text-sm">
                    Belum ada tugas terdaftar saat ini.
                </div>
            @endforelse

        </div>
    </div>
@endsection
