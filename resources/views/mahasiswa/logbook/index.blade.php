<x-mahasiswa-layout>
    <link rel="stylesheet" href="/css/logbook.css">
    <style>
        .sidebar {
            top: -15px;
        }
    </style>
    <div class="main-content">
        <h1>Logbook</h1><br>
        <a href="{{ route('logbook.create') }}" class="buat"><i class="fa-solid fa-pen-to-square"></i>Buat Logbook</a>
        <div class="card-log">
            <div class="card-containter">
                @foreach ($logbook as $item)
                    <div class="card">
                        <div class="card-content">
                            <h3>Minggu {{ $loop->iteration }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                            <img src="{{ Storage::url($item->image) }}" alt="Image"
                                style="width: 400px; height: auto;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-mahasiswa-layout>