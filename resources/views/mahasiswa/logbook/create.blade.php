<x-mahasiswa-layout>
    <link rel="stylesheet" href="/css/form-logbook.css">
    <style>
        .sidebar {
            top: -15px;
        }
    </style>
    <div class="main-content">
        <a href="/logbook" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <h1>Logbook</h1>
        <form action="{{ route('logbook.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
            </div>
            <div>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
                <input type="hidden" value="{{ Session::get('nim') }}" name="nim">
            </div>
            <button type="submit">Submit</button>
        </form>

        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
        {{-- <div class="text-area">
            <textarea name="logbook" id="" cols="130" rows="15">Ceritakan kegiatan anda...</textarea>
        </div>
        <div class="input-box upload">
            <label for="image">Add Image</label>
            <input type="file" name="image" placeholder="Pilih File" required>
        </div>
        <div class="button-container">
            <button type="submit" value="submit">Submit<i class="fa-solid fa-paper-plane"></i></button>
        </div> --}}
    </div>
</x-mahasiswa-layout>