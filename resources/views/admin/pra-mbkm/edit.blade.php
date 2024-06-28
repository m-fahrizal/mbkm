<x-admin-layout>
    
    <div id="content">

        <!-- End of Topbar -->

        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="back">
                <a href="/prambkm" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
            </div><br>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Mahasiswa Pra MBKM</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('prambkm.update', $prambkm->id) }}" method="POST" enctype="multipart/form-data"
                                style="display:inline;">
                                @csrf
                                @method('PUT')

                                <!-- Form fields for each column in the table -->
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="number" class="form-control" id="nim" name="nim"
                                        value="{{ $prambkm->mahasiswa->nim }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $prambkm->mahasiswa->user->name }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Program Studi</label>
                                    <input type="text" class="form-control" id="prodi" name="prodi"
                                        value="{{ $prambkm->mahasiswa->prodi }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="angkatan">Angkatan</label>
                                    <input type="number" class="form-control" id="angkatan"
                                        name="angkatan" value="{{ $prambkm->mahasiswa->angkatan }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <input type="number" class="form-control" id="semester"
                                        name="semester" value="{{ $prambkm->mahasiswa->semester }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input type="text" class="form-control" id="ipk" name="ipk"
                                        value="{{ $prambkm->mahasiswa->ipk }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_mbkm">Jenis MBKM</label>
                                    <input type="text" class="form-control" id="jenis_mbkm"
                                        name="jenis_mbkm" value="{{ $prambkm->jenis_mbkm }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="periode_mbkm">Periode MBKM</label>
                                    <input type="text" class="form-control" id="periode_mbkm"
                                        name="periode_mbkm" value="{{ $prambkm->periode_mbkm }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="durasi_kegiatan">Durasi Kegiatan</label>
                                    <input type="text" class="form-control" id="durasi_kegiatan"
                                        name="durasi_kegiatan" value="{{ $prambkm->durasi_kegiatan }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp"
                                        value="{{ $prambkm->no_hp }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $prambkm->mahasiswa->user->email }}" disabled required>
                                </div>
                                <div class="form-group">
                                    <label for="instansi">Instansi</label>
                                    <input type="text" class="form-control" id="instansi"
                                        name="instansi" value="{{ $prambkm->instansi }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_instansi">Alamat Instansi</label>
                                    <input type="text" class="form-control" id="alamat_instansi"
                                        name="alamat_instansi" value="{{ $prambkm->alamat_instansi }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_mentor">Nama Mentor</label>
                                    <input type="text" class="form-control" id="nama_mentor"
                                        name="nama_mentor" value="{{ $prambkm->nama_mentor }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="dosen">Dosen Pembimbing</label>
                                    <input type="text" class="form-control" id="dosen" name="dosen"
                                        value="{{ $prambkm->dosen }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" class="form-control" id="posisi" name="posisi"
                                        value="{{ $prambkm->posisi }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="loa">Loa</label>
                                    <input type="file" class="form-control" id="loa"
                                        name="loa">
                                </div>
                                <div class="form-group">
                                    <label for="krs">KRS</label>
                                    <input type="file" class="form-control" id="krs"
                                        name="krs">
                                </div>
                                <div class="form-group">
                                    <label for="khs">KHS</label>
                                    <input type="file" class="form-control" id="khs"
                                        name="khs">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>