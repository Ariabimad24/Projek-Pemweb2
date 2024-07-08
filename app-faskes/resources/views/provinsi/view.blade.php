<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Provinsi</x-slot> 
<x-slot name="card_title">Detail Provinsi :: {{ $provinsi->id }}</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Nama Provinsi</th><td>{{ $provinsi->nama }}</td></tr>
</table>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Ibukota</th><td>{{ $provinsi->ibukota }}</td></tr>
</table>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Latitude</th><td>{{ $provinsi->latitude }}</td></tr>
</table>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Longitude</th><td>{{ $provinsi->longitude }}</td></tr>
</table>
<div>
    <a href="{{ route('provinsi.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
