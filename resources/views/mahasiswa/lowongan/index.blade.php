<x-mahasiswa-layout>

    <link rel="stylesheet" href="/css/mbkm-mandiri.css">
    <div class="main-content">
        <h1>Lowongan MBKM Mandiri</h1><br>
        <div class="card-mbkm">
            <div class="card-container">
                @foreach ($lowongan as $item)
                    <div class="card">
                        <img src="{{ Storage::url($item->flyer) }}" alt="Flyer" style="width: 200px; height: auto;">
                        </td>
                        <div class="card-content">
                            <h3>{{ $item->nama_perusahaan }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                            <p class="detail"><b>Tempat:</b> {{ $item->tempat }}</p>
                            <p class="detail"><b>Posisi:</b> {{ $item->posisi }}</p>
                            <p class="detail"><b>Durasi:</b> {{ $item->durasi }}</p>
                            <p class="detail"><b>Deadline:</b> {{ $item->deadline }}</p>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('daftarmbkm.create', ['id'=>$item->id]) }}" id="daftar" class="daftar"><i class="fas fa-clipboard-list"></i>Daftar MBKM</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-mahasiswa-layout>
