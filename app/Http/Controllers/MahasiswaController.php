<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $profilMahasiswa= [
            ['id' => 1, 'NIM' => '20251002014', 'Nama' => 'Nanda Putra', 'Angkatan' => '2026', 'Minat' => 'Artificial Intelligence'],
            ['id' => 2, 'NIM' => '20251002015', 'Nama' => 'Alata', 'Angkatan' => '2025', 'Minat' => 'Web Development'],
            ['id' => 3, 'NIM' => '20251002016', 'Nama' => 'Kuroneko', 'Angkatan' => '2024', 'Minat' => 'Game Development'],
        ];

        return view('mahasiswa.index', compact('profilMahasiswa'));
    }

    public function show(string $id)
    {
        $detailProfil= [
            1 => ['id' => 1, 'NIM' => 'Nanda Putra', 'Nama' => '20251002014', 'Angkatan' => '2026', 'Minat' => 'Artificial Intelligence', 'Email' => 'nanda.putra@example.com', 'no_hp' => '081234567890'],
            2 => ['id' => 2, 'NIM' => 'Alata', 'Nama' => '20251002015', 'Angkatan' => '2025', 'Minat' => 'Web Development', 'Email' => 'alata@example.com', 'no_hp' => '081234567891'],
            3 => ['id' => 3, 'NIM' => 'Kuroneko', 'Nama' => '20251002016', 'Angkatan' => '2024', 'Minat' => 'Game Development', 'Email' => 'kuroneko@example.com', 'no_hp' => '081234567892'],
        ];
        $detail = $detailProfil[$id] ?? null;
        return view('mahasiswa.show', compact('id', 'detail'));
    }

}
