<x-admin-layout>
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Users</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <a href="{{ route('mahasiswa.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Mahasiswa</a><br><br>

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
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Password</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswaData as $mhs)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $mhs->user->password }}</td>
                                                <td>{{ $mhs->user->name }}</td>
                                                <td>{{ $mhs->user->email }}</td>
                                                <td>
                                                    <form id="deleteForm{{ $mhs->id }}"
                                                        action="{{ route('user.destroy', $mhs->id_user) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                            onclick="confirmDelete({{ $mhs->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('kaprodi.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Kaprodi</a><br><br>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kaprodi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless" id="" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Password</th>
                                                    <th>Nama</th>
                                                    <th>Prodi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kaprodiData as $kp)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $kp->nip }}</td>
                                                        <td>{{ $kp->user->password }}</td>
                                                        <td>{{ $kp->user->name }}</td>
                                                        <td>{{ $kp->prodi }}</td>
                                                        <td>
                                                            <form id="deleteForm{{ $kp->id }}"
                                                                action={{ route('user.destroy', $kp->id_user) }} method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                                    onclick="confirmDelete({{ $kp->id }})">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('dosen.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Dosen</a><br><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Dosen Pembimbing</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Password</th>
                                            <th>Nama Dosen Pembimbing</th>
                                            <th>No Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dosenData as $dd)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dd->nip }}</td>
                                                <td>{{ $dd->user->password }}</td>
                                                <td>{{ $dd->user->name }}</td>
                                                <td>{{ $dd->no_hp }}</td>
                                                <td>
                                                    <form id="deleteForm{{ $dd->id }}"
                                                        action="{{ route('user.destroy', $dd->id_user) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                            onclick="confirmDelete({{ $dd->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('mitra.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Mitra</a><br><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Mitra MBKM</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Mitra</th>
                                            <th>Password</th>
                                            <th>Nama Instansi</th>
                                            <th>No Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mitraData as $mitra)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $mitra->user->username }}</td>
                                                <td>{{ $mitra->user->password }}</td>
                                                <td>{{ $mitra->user->name }}</td>
                                                <td>{{ $mitra->no_hp }}</td>
                                                <td>
                                                    <form id="deleteForm{{ $mitra->id }}"
                                                        action="{{ route('user.destroy', $mitra->id_user) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                            onclick="confirmDelete({{ $mitra->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('pic.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah PIC</a><br><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar PIC MBKM</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Password</th>
                                            <th>Nama PIC</th>
                                            <th>Prodi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($picData as $pic)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pic->nip }}</td>
                                                <td>{{ $pic->user->password }}</td>
                                                <td>{{ $pic->user->name }}</td>
                                                <td>{{ $pic->prodi }}</td>
                                                <td>
                                                    <form id="deleteForm{{ $pic->id }}"
                                                        action="{{ route('user.destroy', $pic->id_user) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                            onclick="confirmDelete({{ $pic->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('staff.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Staff</a><br><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Staff Prodi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Password</th>
                                            <th>Nama Staff</th>
                                            <th>Prodi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffData as $staff)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $staff->nip }}</td>
                                                <td>{{ $staff->user->password }}</td>
                                                <td>{{ $staff->user->name }}</td>
                                                <td>{{ $staff->prodi }}</td>
                                                <td>
                                                    <form id="deleteForm{{ $staff->id }}"
                                                        action="{{ route('user.destroy', $staff->id_user) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                            onclick="confirmDelete({{ $staff->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'Yakin ingin menghapus data?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + userId).submit();
                }
            })
        }
    </script>
</x-admin-layout>
