@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-xl font-semibold text-gray-900">Dashboard TaskFlow</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-5">

        <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
            <p class="text-2xl font-bold text-blue-600">{{ $stats['total_tasks'] }}</p>
            <p class="text-sm text-gray-500 mt-1 font-medium">Total Tugas</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
            <p class="text-2xl font-bold text-yellow-500">{{ $stats['in_progress'] }}</p>
            <p class="text-sm text-gray-500 mt-1 font-medium">In Progress</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
            <p class="text-2xl font-bold text-green-600">{{ $stats['selesai'] }}</p>
            <p class="text-sm text-gray-500 mt-1 font-medium">Selesai</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
            <p class="text-2xl font-bold text-red-600">{{ $stats['terlambat'] }}</p>
            <p class="text-sm text-gray-500 mt-1 font-medium">Terlambat</p>
        </div>

    </div>
@endsection
