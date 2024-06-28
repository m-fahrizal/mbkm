<x-admin-layout>
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Logbook</h1>
                <!-- report -->
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i> Tambah Lowongan</a> -->
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Logbook Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logbook as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nim }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>
                                                    <a href="{{ route('logbook.show', $item->id) }}"
                                                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                            class="fas fa-eye"></i> Cek Logbook
                                                    </a>
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
</x-admin-layout>
