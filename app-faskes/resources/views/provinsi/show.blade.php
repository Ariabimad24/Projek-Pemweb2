<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Provinsi</x-slot> 
    <x-slot name="card_title">Daftar Provinsi</x-slot> 
    <x-slot name="card_footer">@FaskesNurulFikri</x-slot>
    
    <h2 class="text-center">Data Provinsi</h2>
    <a href="{{ route('provinsi.create') }}"><button class="btn btn-primary mb-1"><i class="fas fa-plus">Tambah Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Provinsi</th>
                <th>Ibukota</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_provinsi as $provinsi)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $provinsi->nama }}</td>
                <td>{{ $provinsi->ibukota }}</td>
                <td>{{ $provinsi->latitude }}</td>
                <td>{{ $provinsi->longitude }}</td>

                <td>
                    <form action="{{ route('provinsi.destroy', $provinsi->id) }}" method="post">
                        <a href="{{ route('provinsi.view', $provinsi->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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