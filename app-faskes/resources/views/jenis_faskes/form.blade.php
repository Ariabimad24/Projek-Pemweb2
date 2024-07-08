<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Tambah Jenis Faskes</x-slot> 
<x-slot name="card_title">Form Tambah Jenis Faskes</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<form action="{{ route('jenis_faskes.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Jenis Faskes</label>
        <input type="text" name="nama" id="nama" value="{{ $jenis_faskes->nama }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $jenis_faskes->id }}">
    <a href="{{ route('jenis_faskes.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>