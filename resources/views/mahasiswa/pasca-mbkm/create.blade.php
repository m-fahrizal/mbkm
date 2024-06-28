<x-mahasiswa-layout>
    <link rel="stylesheet" href="/css/pasca-mbkm.css">
    <div class="main-content">
        <h1>Form Pasca Kegiatan MBKM</h1>
        @if ($message = Session::get('success'))
            <div>{{ $message }}</div>
        @endif
        <form action="{{ route('pascambkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="input-box upload">
                    <label for="sertifikat">Sertifikat *</label>
                    <input type="file" name="sertifikat" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="logbook">Logbook *</label>
                    <input type="file" name="logbook" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="transkrip">Transkrip Nilai *</label>
                    <input type="file" name="transkrip" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="laporan">Laporan Akhir *</label>
                    <input type="file" name="laporan" placeholder="Pilih File" required>
                </div>
                <input type="hidden" name="nim" value="{{ Session::get('nim') }}">
            </div>
            <div class="button-container">
                <button type="submit" value="submit">Submit<i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</x-mahasiswa-layout>
