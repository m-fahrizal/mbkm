<x-admin-layout>
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Mahasiswa</h1>
            </div>
            <div class="back">
                <a href="{{ route('user.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-fw fa-chevron-left text-white-50"></i> Kembali</a>
            </div>
            <br>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="input-box">
                                    <label for="nim">Nomor Induk Mahasiswa*</label><br>
                                    <input type="number" name="nim" placeholder="Masukkan NIM" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="password">Password*</label><br>
                                    <input type="password" name="password" placeholder="Masukkan Password"
                                        required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="nama">Nama Mahasiswa*</label><br>
                                    <input type="text" name="name" placeholder="Masukkan Nama Lengkap"
                                        required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="email">Email*</label><br>
                                    <input type="email" name="email" placeholder="Masukkan Email" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="email">Prodi</label><br>
                                    <select name="prodi" required>
                                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>  
                                        <option value="D3 Sistem Informasi">D3 Sistem Informasi</option> 
                                        <option value="S1 Informatika">S1 Informatika</option>      
                                    </select><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="email">Angkatan*</label><br>
                                    <input type="number" name="angkatan" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="email">Semester*</label><br>
                                    <input type="number" name="semester" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="email">IPK*</label><br>
                                    <input type="text" name="ipk" required><br><br>
                                </div>
                                <div>
                                    <button class="btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
