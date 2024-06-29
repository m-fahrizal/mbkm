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
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Pasca MBKM Fakultas Ilmu Komputer
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
                                            <th>Sertifikat</th>
                                            <th>Log Book</th>
                                            <th>Transkrip Nilai</th>
                                            <th>Laporan Akhir</th>
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
