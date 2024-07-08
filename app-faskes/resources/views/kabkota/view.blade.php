<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail KabKota</x-slot> 
<x-slot name="card_title">Detail KabKota :: {{ $kabkota->id }} -  {{ $kabkota->nama }}</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Kode KabKota</th><td>{{ $kabkota->kode }}</td></tr>
    <tr><th>Nama KabKota</th><td>{{ $kabkota->nama }}</td></tr>
    <tr><th>Latitude</th><td>{{ $kabkota->latitude }}</td></tr>
    <tr><th>Longitude</th><td>{{ $kabkota->longitude }}</td></tr>
    <tr><th>Provinsi</th><td>{{ $kabkota->provinsi->nama }}</td></tr>
 
</table>
<div>
    <a href="{{ route('kabkota.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
