<x-mahasiswa-layout>

    <link rel="stylesheet" href="/css/mbkm-mandiri.css">
    <style>
        .daftar-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
            background-color: #0056b3;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            text-align: center;
            margin-left: 100px;
        }

        .daftar-btn:hover {
            background-color: #280274;
        }

        .daftar-btn i {
            margin-left: 8px;
        }

        .sidebar {
            top: -15px;
        }
    </style>
    <div class="main-content">
        <h1>Lowongan MBKM Mandiri</h1><br>
        <div class="card-mbkm">
            <div class="card-container">
                @foreach ($lowongan as $item)
                    <div class="card">
                        <img src="{{ Storage::url($item->flyer) }}" alt="Flyer" style="width: 200px; height: auto;"><br>
                        <div class="card-content">
                            <h3>{{ $item->nama_perusahaan }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                            <p class="detail"><b>Tempat:</b> {{ $item->tempat }}</p>
                            <p class="detail"><b>Posisi:</b> {{ $item->posisi }}</p>
                            <p class="detail"><b>Durasi:</b> {{ $item->durasi }}</p>
                            <p class="detail"><b>Deadline:</b> {{ $item->deadline }}</p>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('daftarmbkm.create', ['id' => $item->id]) }}" id="daftar"
                                class="daftar-btn">
                                Daftar<i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-mahasiswa-layout>
