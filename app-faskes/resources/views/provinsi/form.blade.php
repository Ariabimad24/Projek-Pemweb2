<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Provinsi</x-slot> 
<x-slot name="card_title">Form Kelola Provinsi</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<form action="{{ route('provinsi.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Provinsi</label>
        <input type="text" name="nama" id="nama" value="{{ $provinsi->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ibukota">Ibukota</label>
        <input type="text" name="ibukota" id="ibukota" value="{{ $provinsi->ibukota }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="latitude" value="{{ $provinsi->latitude }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="longitude" value="{{ $provinsi->longitude }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $provinsi->id }}">
    <a href="{{ route('provinsi.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>