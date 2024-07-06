<x-mahasiswa-layout>
    <link rel="stylesheet" href="/css/profile.css">
    <style>
        .sidebar {
            top: -15px;
        }
    </style>
    <div class="main-content">
        <h1>Profile</h1>
        <div class="content">
            <div class="item">
                <h3>Nama</h3>
                <p>{{ auth()->user()->name }}</p>
            </div>
            <div class="item">
                <h3>NIM</h3>
                <p>{{ auth()->user()->username  }}</p>
            </div>
            <div class="item">
                <h3>Program Studi</h3>
                <p>{{ $mhs->prodi }}</p>
            </div>
            <div class="item usia">
                <h3>Angkatan</h3>
                <p>{{ $mhs->angkatan }}</p>
            </div>
            <div class="item">
                <h3>Semester</h3>
                <p>{{ $mhs->semester }}</p>
            </div>
            <div class="item">
                <h3>IPK</h3>
                <p>{{ $mhs->ipk }}</p>
            </div>
            <div class="item">
                <h3>Jenis MBKM</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->jenis_mbkm : '-' }}</p>
            </div>
            <div class="item">
                <h3>Periode MBKM</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->periode_mbkm : '-' }}</p>
            </div>
            <div class="item">
                <h3>Durasi Kegiatan</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->durasi_kegiatan : '-' }}</p>
            </div>
            <div class="item">
                <h3>No HP</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->no_hp : '-' }}</p>
            </div>
            <div class="item">
                <h3>Email</h3>
                <p>{{ $mhs->user->email }}</p>
            </div>
            <div class="item">
                <h3>Instansi</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->instansi : '-' }}</p>
            </div>
            <div class="item">
                <h3>Alamat Instansi</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->alamat_instansi : '-' }}</p>
            </div>
            <div class="item">
                <h3>Nama Mentor</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->nama_mentor : '-' }}</p>
            </div>
            <div class="item">
                <h3>Dosen Pembimbing</h3>
                <p>{{ isset($praMbkmData->dosen) ? $praMbkmData->dosen->user->name : '-' }}</p>
            </div>
            <div class="item">
                <h3>Posisi</h3>
                <p>{{ isset($praMbkmData) ? $praMbkmData->posisi : '-' }}</p>
            </div>
            <div class="item">
                <h3>Status Mahasiswa</h3>
                <p>Aktif</p>
            </div>
        </div>
    </div>
</x-mahasiswa-layout>
