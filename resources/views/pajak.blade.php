@extends('master')

@section('title','data')

@section('konten')

@extends('layouts.app')

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2>daftar pajak</h2>
            <table class="table table-striped table-bordered" id="listKamar">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th scope="col">no urut</th>
                        <th scope="col">nama</th>
                        <th scope="col">nama lengkap</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pajak as $paj):
                    <tr>
                        <td> <?= $paj['idnpwp']; ?></td>
                        <td> <?= $paj['nama'] ?></td>
                        <td> <?= $paj['namalengkap'] ?></td>
                        <td> <?= $paj['alamat'] ?></td>
                        <td> <?= $paj['notelp'] ?></td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection