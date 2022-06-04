@extends('Backend/layout/layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Data Galeri</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/data-blog">Data Galeri</a></li>
                            <li class="breadcrumb-item active">Add Galeri</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- right column -->
                    <div class="col-md-12">

                        <!-- general form elements disabled -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Data Galeri</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('addDataGaleri')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Foto</label>
                                                <input type="text" name="name_image"
                                                       class="form-control @error('name_image') is-invalid @enderror"
                                                       value="{{ old('name_image') }}"
                                                       placeholder="Masukan Nama Foto ...">
                                                <div class="invalid-feedback">
                                                    @error('name_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">



                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control  @error('category') is-invalid @enderror" name="category">
                                                        <option value="{{null}}">Pilih Kategori</option>
                                                        <option  value="sosial-media">Sosial Media</option>
                                                        <option  value="website">Website</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        @error('category')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="invalid-feedback">
                                                    @error('category')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Images Galeri</label>
                                            </div>
                                            <div class="custom-file">
                                                <input name="image" type="file"
                                                       class="custom-file-input form-control @error('image') is-invalid @enderror"
                                                       id="customFile" value="{{ old('image') }}">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <div class="invalid-feedback">
                                                    @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <br/>
                                    <div class="row">
                                        <div class="col-sm-12">


                                            <div class="form-group">

                                                <input type="hidden" name="tgl_post"
                                                       class="form-control @error('tgl_post') is-invalid @enderror"
                                                       value="{{$date}}"
                                                       readonly>
                                                <div class="invalid-feedback">
                                                    @error('tgl_post')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="card-footer col-sm-12">

                                        <a href="{{route('galeri')}}" class="btn btn-success"> <span class="fas fa-times">
                                                </span> Cancel</a>


                                        <button type="submit" class="btn btn-primary"><span class="fas fa-plus">
                                                </span>
                                            Add Galeri
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
