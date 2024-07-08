<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Selamat Datang di Profile Saya</h1>
    <h1>Nama : Angga</h1>
    <h1>Prodi : TI</h1>
    <h1>Matkul : Pemweb</h1>
    <hr>
    @php
        $nama = 'Umam';
        $nilai = '100';
        //echo 'Apa Kabar '. $nama . '?';
    @endphp
    @if ($nilai >=60)
        @php $ket = "LULUS"; @endphp
    @else
        @php $ket = "GAGAL"; @endphp
    @endif
    <h2>Nama Saya : {{$nama}} dengan nilai {{$nilai}} dinyatakan : {{$ket}}</h2>
</body>
</html>