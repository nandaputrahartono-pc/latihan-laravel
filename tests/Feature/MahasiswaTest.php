<?php

it('renders the mahasiswa list and links each record to its detail page', function () {
    $response = $this->get(route('mahasiswa.index'));

    $response->assertOk()
        ->assertSee('Daftar Mahasiswa')
        ->assertSee('Nanda Putra')
        ->assertSee('20251002014')
        ->assertSee(route('mahasiswa.show', ['id' => 1]), false);
});

it('renders a mahasiswa detail page from its route parameter', function () {
    $response = $this->get(route('mahasiswa.show', ['id' => 1]));

    $response->assertOk()
        ->assertSee('Detail Mahasiswa')
        ->assertSee('Nama: Nanda Putra')
        ->assertSee('NIM: 20251002014')
        ->assertSee('Artificial Intelligence');
});

it('shows an empty detail state for an unknown mahasiswa id', function () {
    $response = $this->get(route('mahasiswa.show', ['id' => 999]));

    $response->assertOk()
        ->assertSee('Data mahasiswa dengan ID 999 tidak ditemukan.');
});
