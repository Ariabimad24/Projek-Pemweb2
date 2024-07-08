<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Jenis Faskes</x-slot> 
<x-slot name="card_title">Detail Jenis Faskes :: {{ $jenis_faskes->nama }}</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama Jenis Faskes</th><td>{{ $jenis_faskes->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('jenis_faskes.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>


