<x-print-layout>
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <img src="{{ asset('img/upn.png') }}" style="width: 50px; margin-left: 850px" alt="">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Pra MBKM Fakultas Ilmu Komputer
                            </h6>
                        </div>
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
                                            <th>Durasi Kegiatan</th>
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
                                                <td>{{ $item->durasi_kegiatan }}</td>
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

    <script type="text/javascript">
        window.print();
    </script>
</x-print-layout>
