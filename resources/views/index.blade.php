@extends('master')

@section('title','Home')

@section('judul_halaman','Data Mahasiswa')

@section('konten')

@extends('layouts.app')
<a href="/mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <th scope="col">no urut</th>
        <th scope="col">id bayar</th>
        <th scope="col">nama </th>
        <th scope="col">plat nomor</th>
        <th scope="col">petugas </th>
        <th scope="col">pembayaran</th>
        <th scope="col">tanggal Lunas</th>
    </thead>
    <tbody>
        <?php $loop = 1;
        foreach ($data as $jn) : ?>
            <tr>
                <th scope="row"><?= $loop++ ?></th>
                <td><?= $jn['nama'] ?> - <?= $jn['idbayar'] ?></td>
                <td> <?= $jn['nama'] ?></td>
                <td> <?= $jn['nomorplat'] ?></td>
                <td> <?= $jn['namapetugas'] ?></td>
                <td> <?= $jn['besarpajak'] ?></td>
                <td> <?= $jn['tanggal'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
@endsection