<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        return view('mahasiswa.index', [
            'mahasiswa' => array_values($this->mahasiswaData()),
        ]);
    }

    public function show(string $id): View
    {
        $mahasiswa = $this->mahasiswaData()[(int) $id] ?? null;

        return view('mahasiswa.show', compact('id', 'mahasiswa'));
    }

    /**
     * @return array<int, array{id: int, nim: string, nama: string, angkatan: int, minat: string, email: string, no_hp: string}>
     */
    private function mahasiswaData(): array
    {
        return [
            1 => [
                'id' => 1,
                'nim' => '20251002014',
                'nama' => 'Nanda Putra',
                'angkatan' => 2026,
                'minat' => 'Artificial Intelligence',
                'email' => 'nanda.putra@example.com',
                'no_hp' => '081234567890',
            ],
            2 => [
                'id' => 2,
                'nim' => '20251002015',
                'nama' => 'Alata',
                'angkatan' => 2025,
                'minat' => 'Web Development',
                'email' => 'alata@example.com',
                'no_hp' => '081234567891',
            ],
            3 => [
                'id' => 3,
                'nim' => '20251002016',
                'nama' => 'Kuroneko',
                'angkatan' => 2024,
                'minat' => 'Game Development',
                'email' => 'kuroneko@example.com',
                'no_hp' => '081234567892',
            ],
        ];
    }
}
