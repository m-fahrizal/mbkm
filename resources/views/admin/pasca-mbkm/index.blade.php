<x-admin-layout>
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa Pasca MBKM</h1>
                <!-- report -->
                @if(Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                    <a href="{{ route('pascambkm.print') }}" target="_blank"
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
                                            <th>Sertifikat</th>
                                            <th>Log Book</th>
                                            <th>Transkrip Nilai</th>
                                            <th>Laporan Akhir</th>
                                            @if (Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->prambkm->mahasiswa->nim }}</td>
                                                <td>{{ $item->prambkm->mahasiswa->user->name }}</td>
                                                <td><a href="{{ Storage::url($item->sertifikat) }}"
                                                        target="_blank">Lihat FIle</a></td>
                                                <td><a href="{{ Storage::url($item->logbook) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                <td><a href="{{ Storage::url($item->transkrip) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                <td><a href="{{ Storage::url($item->laporan) }}" target="_blank">Lihat
                                                        FIle</a></td>
                                                @if (Gate::check('admin') || Gate::check('pic') || Gate::check('staff'))
                                                    <td>
                                                        <!-- Form for DELETE request -->
                                                        <form id="deleteForm{{ $item->id }}"
                                                            action="{{ route('pascambkm.destroy', $item->id) }}"
                                                            method="POST">
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
