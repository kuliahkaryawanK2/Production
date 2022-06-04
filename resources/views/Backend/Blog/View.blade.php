@extends('Backend/layout/layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Data Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog')}}">Data Blog</a></li>
                            <li class="breadcrumb-item active">Detail Data Blog</li>
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
                                <h3 class="card-title">Detail Data Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form
                                >
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <input type="text"
                                                       class="form-control"
                                                       disabled
                                                       value="{{ $detailBlog->meta_desc }}"
                                                >

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Meta Keyword</label>
                                                <input type="text" name="meta_keyword"
                                                       class="form-control"
                                                       value="{{ $detailBlog->meta_key }}"
                                                       disabled>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Judul Blog</label>
                                                <input type="text" name="judul"
                                                       class="form-control"
                                                       value="{{ $detailBlog->judul }}"
                                                       disabled
                                                >

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ringkasan Blog</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="Enter ..." name="judul_short" readonly>
                                                   {{ $detailBlog->judul_short }}
                                                </textarea>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Images Blog</label>
                                            </div>
                                            <div class="form-group">
                                                {{--                                                <img src="{{ url('/blog'). "/".$detailBlog->image }}">--}}

                                                <div class="filtr-item col-sm-6" data-category="1"
                                                     data-sort="white sample">
                                                    <a href="{{ url('/blog'). "/".$detailBlog->image }}"
                                                       data-toggle="lightbox" data-title="sample 1 - white">
                                                        <img src="{{ url('/blog'). "/".$detailBlog->image }}"
                                                             class="img-fluid mb-9" alt="white sample"/>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <br/>
                                    <div class="row">
                                        <div class="col-sm-12">


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Content Blog</label>
                                                <textarea rows="5"
                                                          class="note-codeable"
                                                          area-multiline="true" id="summernote" disabled>
                                                      {{ $detailBlog->isi }}

                                                </textarea>
                                                <div class="invalid-feedback">
                                                    @error('isi')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer col-sm-12">

                                        <a href="{{route('blog')}}" class="btn btn-success">
                                            Kembali</a>

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