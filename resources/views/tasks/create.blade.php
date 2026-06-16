@extends('layouts.app')

@section('title', 'Tambah Tugas Baru')

@section('content')
    <div class="max-w-2xl mx-auto">
        <a href="{{ route('tasks.index') }}" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-1 mb-4">
            ← Kembali ke Daftar Tugas
        </a>

        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h1 class="text-xl font-semibold text-gray-900 mb-6">Tambah Tugas Baru</h1>

            <form action="#" method="POST" class="space-y-4">
                {{-- 1. PROTEKSI KEAMANAN CSRF --}}
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Tugas</label>
                    <input type="text" id="title" name="title"
                           value="{{ old('title') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500">

                    {{-- 2. VALIDASI ERROR JUDUL --}}
                    @error('title')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500">{{ old('description') }}</textarea>

                    {{-- 3. VALIDASI ERROR DESKRIPSI --}}
                    @error('description')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end pt-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm font-medium shadow-sm transition-colors">
                        Simpan Tugas
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
