<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    @if ($mahasiswa !== null)
        <p>Nama: {{ $mahasiswa['nama'] }}</p>
        <p>NIM: {{ $mahasiswa['nim'] }}</p>
        <p>Angkatan: {{ $mahasiswa['angkatan'] }}</p>
        <p>Minat: {{ $mahasiswa['minat'] }}</p>
        <p>Email: {{ $mahasiswa['email'] }}</p>
        <p>No. HP: {{ $mahasiswa['no_hp'] }}</p>
    @else
        <p>Data mahasiswa dengan ID {{ $id }} tidak ditemukan.</p>
    @endif

    <a href="{{ route('mahasiswa.index') }}">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
