<x-admin-layout>
    <div id="content">

        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Logbook</h1>
                <!-- report -->

            </div>
            <div class="back">
                <a href="{{ route('logbook.admin-index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-fw fa-chevron-left text-white-50"></i> Kembali</a>
            </div>
            <br>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Project Card Example -->
                    @foreach ($logbook as $item)
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="text-primary">Minggu {{ $loop->iteration }}</h5>
                                <p>{{ $item->deskripsi }}</p>
                                <img src="{{ Storage::url($item->image) }}" alt="Image"
                                    style="width: 400px; height: auto;">
                                <a href="/form-logbook" class="edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>