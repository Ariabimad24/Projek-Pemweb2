<x-layout>
    <x-slot name="title">Data Mahasiswa</x-slot>
    <x-slot name="card_title">Profil Mahasiswa Aktif</x-slot>
    <x-slot name="card_footer">@FaskesNurulFikri</x-slot>

    <h2 class="text-center">BIODATA</h2>
    <h2 class="text-center">MAHASISWA</h2>
    <section class="content">
        <div class="card-body">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="d-flex flex-row flex-nowrap overflow-auto">
                            <!-- Mahasiswa 1 -->
                            <div class="card mx-2" style="min-width: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Mahasiswa</h5>
                                    <div class="text-center pt-5">
                                        <img src="{{ asset('assets/img/profile1.jpg') }}" class="img-fluid" alt="Profile Image">
                                    </div>
                                    <ul class="list-group list-group-flush mt-3">
                                        <li class="list-group-item"><strong>Nama :</strong> Muhammad Umam Afif</li>
                                        <li class="list-group-item"><strong>NIM :</strong> 0110223218</li>
                                        <li class="list-group-item"><strong>Rombel :</strong> TI07</li>
                                        <li class="list-group-item"><strong>Program Studi :</strong> Teknik Informatika</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mahasiswa 2 -->
                            <div class="card mx-2" style="min-width: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Mahasiswa</h5>
                                    <div class="text-center pt-5">
                                        <img src="{{ asset('assets/img/profile2.jpeg') }}" class="img-fluid" alt="Profile Image">
                                    </div>
                                    <ul class="list-group list-group-flush mt-3">
                                        <li class="list-group-item"><strong>Nama :</strong> Muhammad Fikrie El Muqoffa</li>
                                        <li class="list-group-item"><strong>NIM :</strong> 0110223222</li>
                                        <li class="list-group-item"><strong>Rombel :</strong> TI07</li>
                                        <li class="list-group-item"><strong>Program Studi :</strong> Teknik Informatika</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mahasiswa 3 -->
                            <div class="card mx-2" style="min-width: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Mahasiswa</h5>
                                    <div class="text-center pt-5">
                                        <img src="{{ asset('assets/img/profile3.jpeg') }}" class="img-fluid" alt="Profile Image">
                                    </div>
                                    <ul class="list-group list-group-flush mt-3">
                                        <li class="list-group-item"><strong>Nama :</strong> Aria Bima Darmawan</li>
                                        <li class="list-group-item"><strong>NIM :</strong> 0110223228</li>
                                        <li class="list-group-item"><strong>Rombel :</strong> TI07</li>
                                        <li class="list-group-item"><strong>Program Studi :</strong> Teknik Informatika</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mahasiswa 4 -->
                            <div class="card mx-2" style="min-width: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Mahasiswa</h5>
                                    <div class="text-center pt-5">
                                        <img src="{{ asset('assets/img/profile4.jpeg') }}" class="img-fluid" alt="Profile Image">
                                    </div>
                                    <ul class="list-group list-group-flush mt-3">
                                        <li class="list-group-item"><strong>Nama :</strong> Rifqie Abiyu Fahlevi</li>
                                        <li class="list-group-item"><strong>NIM :</strong> 0110223204</li>
                                        <li class="list-group-item"><strong>Rombel :</strong> TI07</li>
                                        <li class="list-group-item"><strong>Program Studi :</strong> Teknik Informatika</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tambahkan lebih banyak Mahasiswa jika diperlukan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
