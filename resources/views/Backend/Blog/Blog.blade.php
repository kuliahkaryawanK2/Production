@extends('Backend/layout/layout')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Blog</li>
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

                                <a href="/admin/blog/add-blog" style="float: right;" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Blog</a>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Ringkasan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($dataBlog as $data){
                                      ?>

                                    <tr>

                                        <td>{{ $no++}}</td>
                                        <td>{{$data->judul}}</td>
                                        <td>{{$data->judul_short}}</td>

                                        <td>
                                            <div class="btn-group-vertical">
                                                <a href="{{route('detailBlog', $data->id)}}"
                                                   class="btn btn-primary" data-tooltip="tooltip" title="View Blog"
                                                   data-toggle="offcanvas">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>

                                            <div class="btn-group-vertical">
                                                <button data-toggle="modal"
                                                   class="btn btn-warning" data-tooltip="tooltip" title="View Data"
                                                   data-toggle="offcanvas" data-target="#updateBlog<?= $data->id ?>">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>

                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-tooltip="tooltip" title="Delete Blog"
                                                        data-target="#deleteBlog<?= $data->id ?>">
                                                    <i class="fas fa-trash"></i>
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

@foreach($dataBlog as $data)
            <div class="modal fade" id="deleteBlog<?= $data->id ?>">
                <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header">
                            <h4 class="modal-title">Apakah Anda Ingin Menghapus Blog ?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{$data->judul}}</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <a href="{{route('deleteBlog', $data->id)}}" class="btn btn-outline-light">Save changes</a>
                        </div>
                    </div>

                </div>

            </div>
    @endforeach

            @foreach($dataBlog as $data)
                <div class="modal fade" id="updateBlog<?= $data->id ?>">
                    <div class="modal-dialog">
                        <div class="modal-content bg-warning">
                            <div class="modal-header">
                                <h4 class="modal-title">Apakah Anda Ingin Mengupdate Blog ?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{$data->judul}}</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                <a href="{{route('updateBlog', $data->id)}}" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>

                    </div>

                </div>
    @endforeach
@endsection
