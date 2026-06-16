{{-- resources/views/components/priority-badge.blade.php --}}
@props(['priority'])

@php
    // Menggunakan fitur match() PHP untuk menentukan warna berdasarkan tingkat prioritas
    $classes = match($priority) {
        'low'    => 'bg-blue-50 text-blue-700 border-blue-200',
        'medium' => 'bg-orange-50 text-orange-700 border-orange-200',
        'high'   => 'bg-red-50 text-red-700 border-red-200',
        default  => 'bg-gray-50 text-gray-700 border-gray-200',
    };
@endphp

<span class="px-2.5 py-0.5 text-xs font-semibold rounded-md border uppercase {{ $classes }}">
    {{ $priority }}
</span>
