<x-mahasiswa-layout>

    <link rel="stylesheet" href="/css/pra-mbkm.css">
    <div class="main-content">
        <h1>Form Pra Kegiatan MBKM</h1>
        @if ($message = Session::get('success'))
            <div>{{ $message }}</div>
        @endif
        <form action="{{ route('prambkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="input-box dropdown">
                    <label for="jenis">Jenis MBKM *</label>
                    <select name='jenis' required>
                        <option value="">Silakan Pilih Jenis MBKM</option>
                        <option value='Kampus Mengajar'>Kampus Mengajar</option>
                        <option value='Magang MSIB'>Magang MSIB</option>
                        <option value='Studi Independen'>Studi Independen</option>
                        <option value='PMM'>Pertukaran Mahasiswa Merdeka</option>
                        <option value='IISMA'>IISMA</option>
                        <option value='Wirausaha Merdeka'>Wirausaha Merdeka</option>
                        <option value='Bangkit'>Bangkit</option>
                        <option value='Magang Mandiri'>Magang Mandiri</option>
                        <option value='ABN'>Aktualisasi Bela Negara</option>
                    </select>
                </div>
                <div class="input-box dropdown">
                    <label for="periode">Periode MBKM *</label>
                    <select name='periode' required>
                        {{-- <option value="">Silakan Pilih Periode</option> --}}
                        {{-- <option value='2022'>2022/2023</option> --}}
                        <option value='2023/2024'>2023/2024</option>
                        {{-- <option value='2024'>2024/2025</option> --}}
                        {{-- <option value='2025'>2025/2026</option> --}}
                    </select>
                </div>
                <div class="input-box dropdown">
                    <label for="durasi">Durasi Kegiatan *</label>
                    <select name='durasi' required>
                        <option value="">Silakan Pilih Durasi Kegiatan</option>
                        <option value='4 Bulan'>4 bulan</option>
                        <option value='5 Bulan'>5 bulan</option>
                        <option value='6 Bulan'>6 bulan</option>
                        <option value='7 Bulan'>7 bulan</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="hp">Nomor Handphone *</label>
                    <input type="text" name="hp" placeholder="Masukkan Nomor Handphone" required>
                </div>
                <div class="input-box">
                    <label for="instansi">Nama Instansi *</label>
                    <input type="text" name="instansi" placeholder="Masukkan Nama Instansi" required>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat Instansi *</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat Instansi" required>
                </div>
                <div class="input-box">
                    <label for="mentor">Nama Mentor *</label>
                    <input type="text" name="mentor" placeholder="Masukkan Nama Mentor" required>
                </div>
                <div class="input-box">
                    <label for="posisi">Divisi/Posisi *</label>
                    <input type="text" name="posisi" placeholder="Masukkan Divisi/Posisi" required>
                </div>
                <div class="input-box upload">
                    <label for="loa">Letter of Acceptance (LoA) *</label>
                    <input type="file" name="loa" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="krs">KRS *</label>
                    <input type="file" name="krs" placeholder="Pilih File" required>
                </div>
                <div class="input-box upload">
                    <label for="khs">KHS *</label>
                    <input type="file" name="khs" placeholder="Pilih File" required>
                </div>
            </div>
            <div class="button-container">
                <button type="submit" value="submit">Submit<i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</x-mahasiswa-layout>
