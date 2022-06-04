@extends('Backend/layout/layout')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Kontak Masuk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kontak Masuk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">

                             <h4>Kontak Masuk</h4>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($dataKontak as $data){
                                    ?>

                                    <tr>

                                        <td>{{ $no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <a href="{{route('detailKontak', $data->id)}}"
                                                   class="btn btn-primary" data-tooltip="tooltip" title="Lihat Pesan"
                                                   data-toggle="offcanvas">
                                                    <i class="fas fa-eye"></i> Lihat Pesan
                                                </a>
                                            </div>



                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-tooltip="tooltip" title="Hapus Pesan"
                                                        data-target="#deleteKontak<?= $data->id ?>">
                                                    <i class="fas fa-trash"></i> Hapus Pesan
                                                </button>

                                            </div>

                                        </td>

                                    </tr>
                                    <?php } ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            @foreach($dataKontak as $data)
                <div class="modal fade" id="deleteKontak<?= $data->id ?>">
                    <div class="modal-dialog">
                        <div class="modal-content bg-danger">
                            <div class="modal-header">
                                <h4 class="modal-title">Apakah Anda Ingin Menghapus Kontak Masuk ?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{$data->nama}}</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <a href="{{route('deleteKontak', $data->id)}}" class="btn btn-outline-light">Save changes</a>
                            </div>
                        </div>

                    </div>

                </div>
    @endforeach
@endsection
