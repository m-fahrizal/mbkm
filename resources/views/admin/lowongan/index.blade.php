<x-admin-layout>
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Lowongan MBKM Mandiri</h1>
                <!-- report -->
                <a href="{{ route('lowongan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i> Tambah Lowongan</a>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Lowongan MBKM Mandiri</h6>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Deskripsi</th>
                                            <th>Tempat</th>
                                            <th>Posisi</th>
                                            <th>Durasi Magang</th>
                                            <th>Deadline</th>
                                            <th>Flyer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lowongan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_perusahaan }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>{{ $item->tempat }}</td>
                                                <td>{{ $item->posisi }}</td>
                                                <td>{{ $item->durasi_magang }}</td>
                                                <td>{{ $item->deadline }}</td>
                                                <td><a href="{{ Storage::url($item->flyer) }}"
                                                        target="_blank">Lihat Gambar</a></td>
                                                <td>
                                                    <!-- Form for DELETE request -->
                                                    <form id="deleteForm{{ $item->id }}"
                                                        action="{{ route('lowongan.destroy', $item->id) }}" id="{{ $item->id }}"
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