<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Faskes</x-slot> 
<x-slot name="card_title">Form Kelola Faskes</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>
<form action="{{ route('faskes.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Faskes</label>
        <input type="text" name="nama" id="nama" value="{{ $faskes->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama_pengelola">Nama Pengelola</label>
        <input type="text" name="nama_pengelola" id="nama_pengelola" value="{{ $faskes->nama_pengelola }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $faskes->alamat}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" value="{{ $faskes->website}}" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $faskes->email}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating" value="{{ $faskes->rating}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="latitude" value="{{ $faskes->latitude}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="longitude" value="{{ $faskes->longitude}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="kabkota">KabKota</label>
        <select name="kabkota_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_kabkota as $kabkota)
            <option value="{{ $kabkota->id }}" {{ $faskes->kabkota_id==$kabkota->id ? 'selected': ''}}>
                {{ $kabkota->nama }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_kategori as $kategori)
            <option value="{{ $kategori->id }}" {{ $faskes->kategori_id==$kategori->id ? 'selected': ''}}>
                {{ $kategori->nama }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="jenis_faskes">Jenis Faskes</label>
        <select name="jenis_faskes_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_jenis_faskes as $jenis_faskes)
            <option value="{{ $jenis_faskes->id }}" {{ $faskes->jenis_faskes_id==$jenis_faskes->id ? 'selected': ''}}>
                {{ $jenis_faskes->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $faskes->id }}">
    <a href="{{ route('faskes.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>