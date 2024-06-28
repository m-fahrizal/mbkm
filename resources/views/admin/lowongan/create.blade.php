<x-admin-layout>
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="back">
                <a href="{{ route('lowongan.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-fw fa-chevron-left text-white-50"></i> Kembali</a>
            </div><br>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Lowongan MBKM</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form action="{{ route('lowongan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-box">
                                    <label for="perusahaan">Nama Perusahaan*</label><br>
                                    <input type="text" name="perusahaan" placeholder="Masukkan Nama Perusahaan"
                                        required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="deskripsi">Deskripsi*</label><br>
                                    <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi"
                                        required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="tempat">Tempat*</label><br>
                                    <input type="text" name="tempat" placeholder="Masukkan Tempat" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="posisi">Posisi*</label><br>
                                    <input type="text" name="posisi" placeholder="Masukkan Posisi" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="durasi">Durasi*</label><br>
                                    <input type="text" name="durasi" placeholder="Masukkan Durasi Kegiatan"
                                        required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="deadline">Deadline*</label><br>
                                    <input type="text" name="deadline" placeholder="Masukkan Deadline"
                                        required><br><br>
                                </div>
                                <div class="input-box upload">
                                    <label for="flyer">Flyer *</label><br>
                                    <input type="file" name="flyer" placeholder="Pilih File" required><br><br>
                                </div>
                                <button class="btn-primary" type="submit">Submit</button>
                            </form>
                            @if (session('success'))
                                <div>
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
