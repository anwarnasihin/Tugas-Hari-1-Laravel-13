{{-- resources/views/components/status-badge.blade.php --}}
@props(['status'])

@php
    // Menggunakan fitur match() PHP untuk menentukan warna berdasarkan status
    $classes = match($status) {
        'todo'  => 'bg-gray-100 text-gray-800 border-gray-300',
        'doing' => 'bg-amber-100 text-amber-800 border-amber-300',
        'done'  => 'bg-green-100 text-green-800 border-green-300',
        default => 'bg-gray-100 text-gray-800 border-gray-300',
    };

    // Mengubah teks database menjadi lebih rapi saat dibaca
    $label = match($status) {
        'todo'  => 'To Do',
        'doing' => 'In Progress',
        'done'  => 'Selesai',
        default => $status,
    };
@endphp

<span class="px-2.5 py-0.5 text-xs font-semibold rounded-md border {{ $classes }}">
    {{ $label }}
</span>
