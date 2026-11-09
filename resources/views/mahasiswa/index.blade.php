<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    @if (count($mahasiswa) === 0)
        <p>Belum ada data mahasiswa.</p>
    @else
        <ul>
            @foreach ($mahasiswa as $dataMahasiswa)
                <li>
                    <a href="{{ route('mahasiswa.show', ['id' => $dataMahasiswa['id']]) }}">
                        {{ $dataMahasiswa['nama'] }} - {{ $dataMahasiswa['nim'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
