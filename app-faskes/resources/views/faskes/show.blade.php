<x-layout>
    <x-slot name="title">Data Faskes</x-slot>
    <x-slot name="card_title">Daftar Faskes</x-slot>
    <x-slot name="card_footer">@FaskesNurulFikri</x-slot>

    <h2 class="text-center">Data Faskes</h2>
    @if(Auth::user()->role=='administrator')
    <a href="{{ route('faskes.create') }}">
        <button class="btn btn-primary mb-1">
            <i class="fas fa-plus"> Tambah Data</i>
        </button>
    </a>
    @endif
    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Pengelola</th>
                    <th>Alamat</th>
                    <th>Website</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>ID KabKota</th>
                    <th>ID Kategori</th>
                    <th>ID Jenis Faskes</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_faskes as $faskes)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $faskes->nama }}</td>
                    <td>{{ $faskes->nama_pengelola }}</td>
                    <td>{{ $faskes->alamat }}</td>
                    <td>{{ $faskes->website }}</td>
                    <td>{{ $faskes->email }}</td>
                    <td>{{ $faskes->rating }}</td>
                    <td>{{ $faskes->latitude }}</td>
                    <td>{{ $faskes->longitude }}</td>
                    <td>{{ $faskes->kabkota_id }}</td>
                    <td>{{ $faskes->kategori_id }}</td>
                    <td>{{ $faskes->jenis_faskes_id }}</td>
                    <td>
                        <form action="{{ route('faskes.destroy', $faskes->id) }}" method="post">
                            @auth
                            <a href="{{ route('faskes.view', $faskes->id) }}" class="btn btn-transparent">
                                <i class="fas fa-eye text-info"></i>
                            </a>
                            @if(Auth::user()->role=='administrator')
                            <a href="{{ route('faskes.edit', $faskes->id) }}" class="btn btn-transparent">
                                <i class="fas fa-edit text-warning"></i>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-transparent">
                                <i class="fas fa-trash text-danger"></i>
                            </button>
                            @endif
                            @endauth
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
    