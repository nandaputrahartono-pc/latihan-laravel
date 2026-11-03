<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    @if ($detail !== null)
        <h1>Detail Mahasiswa</h1>
        <p>Nama: {{ $detail['Nama'] }}</p>
        <p>NIM: {{ $detail['NIM'] }}</p>
        <p>Angkatan: {{ $detail['Angkatan'] }}</p>
        <p>Minat: {{ $detail['Minat'] }}</p>
        <p>Email: {{ $detail['Email'] }}</p>
        <p>No. HP: {{ $detail['no_hp'] }}</p>
    @else
        <p>Detail mahasiswa Kosong</p>
    @endif

    <a href="{{ route('mahasiswa.index') }}">Kembali ke Daftar Mahasiswa</a>
</body>
</html>