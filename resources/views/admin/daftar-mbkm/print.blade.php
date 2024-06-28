<x-print-layout>
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
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
                                <table class="table table-borderless" id="" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Program Studi</th>
                                            <th>Semester</th>
                                            <th>IPK</th>
                                            <th>Periode MBKM</th>
                                            <th>Nama Instansi</th>
                                            <th>Posisi</th>
                                            <th>No HP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->mahasiswa->nim }}</td>
                                                <td>{{ $item->mahasiswa->user->name }}</td>
                                                <td>{{ $item->mahasiswa->prodi }}</td>
                                                <td>{{ $item->mahasiswa->semester }}</td>
                                                <td>{{ $item->mahasiswa->ipk }}</td>
                                                <td>{{ $item->periode_mbkm }}</td>
                                                <td>{{ $item->lowongan->nama_perusahaan }}</td>
                                                <td>{{ $item->lowongan->posisi }}</td>
                                                <td>{{ $item->no_hp }}</td>
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
</x-print-layout>