<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Tambah Kategori</x-slot> 
<x-slot name="card_title">Form Tambah Kategori</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Kategori</label>
        <input type="text" name="nama" id="nama" value="{{ $kategori->nama }}" class="form-control" required>
    </div>  

    <input type="hidden" name="id" value="{{ $kategori->id }}">
    <a href="{{ route('kategori.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>