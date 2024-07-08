<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Kategori</x-slot> 
    <x-slot name="card_title">Daftar Kategori Aktif</x-slot> 
    <x-slot name="card_footer">@FaskesNurulFikri</x-slot>
    
    <h2 class="text-center">Data Kategori</h2>
    <a href="{{ route('kategori.create') }}"><button class="btn btn-primary mb-1"><i class="fas fa-plus">Tambah Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th> 
                <th>Aksi</th>      
            </tr>
        </thead>
        <tbody>
            @foreach($list_kategori as $kategori)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $kategori->nama }}</td>
                <td>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                        <a href="{{ route('kategori.view', $kategori->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </x-layout>