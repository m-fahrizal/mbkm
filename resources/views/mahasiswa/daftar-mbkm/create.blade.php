<x-mahasiswa-layout>
    <link rel="stylesheet" href="{{ asset('css/form-mandiri.css') }}">
    <div class="main-content">
        <a href="{{ route('lowongan.user-index') }}" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <h1>Daftar MBKM Mandiri</h1>
        @if ($message = Session::get('success'))
            <div>{{ $message }}</div>
        @endif
        <form action="{{ route('daftarmbkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="input-box dropdown">
                    <label for="periode">Periode MBKM *</label>
                    <select name='periode'>
                        {{-- <option value="">Silakan Pilih Periode</option> --}}
                        {{-- <option value='2022'>2022/2023</option> --}}
                        <option value='2023'>2023/2024</option>
                        {{-- <option value='2024'>2024/2025</option> --}}
                        {{-- <option value='2025'>2025/2026</option> --}}
                    </select>
                </div>
                <input type="hidden" value="{{ $lowongan->id }}" name="id_lowongan"/>
                <div class="input-box">
                    <label for="nama_instansi">Nama Instansi *</label>
                    <input type="text" name="nama_instansi" disabled value="{{ $lowongan->nama_perusahaan }}" placeholder="Masukkan Nama Instansi" required>
                </div>
                <div class="input-box">
                    <label for="posisi">Posisi *</label>
                    <input type="text" name="posisi" disabled value="{{ $lowongan->posisi }}" placeholder="Masukkan Posisi Yang Dilamar" required>
                </div>
                <div class="input-box">
                    <label for="hp">Nomor Handphone *</label>
                    <input type="number" name="hp" placeholder="Masukkan Nomor Handphone" required>
                </div>
                <div class="input-box">
                    <label for="email">Email *</label>
                    <input type="email" name="email" disabled value="{{ auth()->user()->email }}" placeholder="Masukkan Email" required>
                </div>
                <div class="input-box upload">
                    <label for="krs">KRS *</label>
                    <input type="file" name="krs" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="khs">KHS *</label>
                    <input type="file" name="khs" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="cv">CV *</label>
                    <input type="file" name="cv" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="portofolio">Portofolio *</label>
                    <input type="file" name="portofolio" placeholder="Pilih File" required>
                </div>
                <div class="button-container">
                    <button type="submit" value="submit">Submit<i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
        </form>
    </div>
</x-mahasiswa-layout>