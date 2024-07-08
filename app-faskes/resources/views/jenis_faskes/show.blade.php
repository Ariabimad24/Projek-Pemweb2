<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Jenis Faskes</x-slot> 
<x-slot name="card_title">Daftar Jenis Faskes Aktif</x-slot> 
<x-slot name="card_footer">@FaskesNurulFikri</x-slot>

<h2 class="text-center">Data Jenis Faskes</h2>
<a href="{{ route('jenis_faskes.create') }}"><button class="btn btn-primary mb-1"><i class="fas fa-plus">Tambah Data</i></button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jenis Faskes</th>   
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_jenis_faskes as $jenis_faskes)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $jenis_faskes->nama }}</td>
            <td>
                <form action="{{ route('jenis_faskes.destroy', $jenis_faskes->id) }}" method="post">
                    <a href="{{ route('jenis_faskes.view', $jenis_faskes->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
                    <a href="{{ route('jenis_faskes.edit', $jenis_faskes->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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