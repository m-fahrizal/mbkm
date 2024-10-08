<x-admin-layout>
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa Pra MBKM</h1>
                <!-- report -->
                @if(Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                    <a href="{{ route('prambkm.print') }}" target="_blank"
                        class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                            class="fas fa-print fa-sm text-white-50"></i> Buat Laporan</a>
                @endif
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Program Studi</th>
                                            <th>Angkatan</th>
                                            <th>Semester</th>
                                            <th>IPK</th>
                                            <th>Jenis MBKM</th>
                                            <th>Periode Kegiatan</th>
                                            <th>Durasi Kegiatan</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Instansi</th>
                                            <th>Alamat Instansi</th>
                                            <th>Nama Mentor</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Posisi</th>
                                            <th>loa</th>
                                            <th>KRS</th>
                                            <th>KHS</th>
                                            @if (Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->mahasiswa->nim }}</td>
                                                <td>{{ $item->mahasiswa->user->name }}</td>
                                                <td>{{ $item->mahasiswa->prodi }}</td>
                                                <td>{{ $item->mahasiswa->angkatan }}</td>
                                                <td>{{ $item->mahasiswa->semester }}</td>
                                                <td>{{ $item->mahasiswa->ipk }}</td>
                                                <td>{{ $item->jenis_mbkm }}</td>
                                                <td>{{ $item->periode_mbkm }}</td>
                                                <td>{{ $item->durasi_kegiatan }}</td>
                                                <td>{{ $item->no_hp }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->instansi }}</td>
                                                <td>{{ $item->alamat_instansi }}</td>
                                                <td>{{ $item->nama_mentor }}</td>
                                                <td>{{ isset($item->dosen) ? $item->dosen->user->name : 'Belum Ada' }}
                                                </td>
                                                <td>{{ $item->posisi }}</td>
                                                <td><a href="{{ Storage::url($item->loa) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                <td><a href="{{ Storage::url($item->krs) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                <td><a href="{{ Storage::url($item->khs) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                @if (Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                                                    <td>
                                                        <!-- Form for EDIT request -->
                                                        <form action="{{ route('prambkm.edit', $item->id) }}"
                                                            method="GET" style="display:inline;">
                                                            <button
                                                                class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"
                                                                type="submit"><i class="fas fa-edit"></i></button>
                                                        </form>

                                                        <!-- Form for DELETE request -->
                                                        <form id="deleteForm{{ $item->id }}"
                                                            action="{{ route('prambkm.destroy', $item->id) }}"
                                                            id="{{ $item->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                                                onclick="confirmDelete({{ $item->id }})">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @endif
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
