<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">DetailFaskes</x-slot> 
<x-slot name="card_title">DetailFaskes :: {{ $faskes->faskes_id }} -  {{ $faskes->nama }}</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Nama Faskes</th><td>{{ $faskes->Nama }}</td></tr>
    <tr><th>Nama Pengelola</th><td>{{ $faskes->nama_pengelola }}</td></tr>
    <tr><th>Alamat</th><td>{{ $faskes->alamat }}</td></tr>
    <tr><th>Website</th><td>{{ $faskes->website }}</td></tr>
    <tr><th>Email</th><td>{{ $faskes->email}}</td></tr>
    <tr><th>Rating</th><td>{{ $faskes->rating }}</td></tr>
    <tr><th>Latitude</th><td>{{ $faskes->latitude }}</td></tr>
    <tr><th>Longitude</th><td>{{ $faskes->longitude }}</td></tr>
    <tr><th>Nama KabKota</th><td>{{ $faskes->kabkota->nama }}</td></tr>
    <tr><th>Kategori</th><td>{{ $faskes->kategori->nama }}</td></tr>
    <tr><th>Jenis Faskes</th><td>{{ $faskes->jenis_faskes->nama}}</td></tr>
</table>
<div>
    <a href="{{ route('faskes.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
