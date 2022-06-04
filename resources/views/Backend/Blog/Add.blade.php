@extends('Backend/layout/layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Data Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/data-blog">Data Blog</a></li>
                            <li class="breadcrumb-item active">Add Data Blog</li>
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
                                <h3 class="card-title">Add Data Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('addDataBlog')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <input type="text" name="meta_desc"
                                                       class="form-control @error('meta_desc') is-invalid @enderror"
                                                       value="{{ old('meta_desc') }}"
                                                       placeholder="Masukan Meta Description...">
                                                <div class="invalid-feedback">
                                                    @error('meta_desc')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Meta Keyword</label>
                                                <input type="text" name="meta_keyword"
                                                       class="form-control @error('meta_keyword') is-invalid @enderror"
                                                       value="{{ old('meta_keyword') }}"
                                                       placeholder="Masukan Meta Keyword...">
                                                <div class="invalid-feedback">
                                                    @error('meta_keyword')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Judul Blog</label>
                                                <input type="text" name="judul"
                                                       class="form-control @error('judul') is-invalid @enderror"
                                                       value="{{ old('judul') }}" placeholder="Masukan Judul Blog...">
                                                <div class="invalid-feedback">
                                                    @error('judul')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ringkasan Blog</label>
                                                <textarea class="form-control @error('judul_short') is-invalid @enderror" rows="3"
                                                          placeholder="Enter ..." name="judul_short">
                                                   {{ old('judul_short') }}
                                                </textarea>

                                                <div class="invalid-feedback">
                                                    @error('judul_short')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Images Blog</label>
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
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Images Blog</label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}

{{--                                                <textarea class="form-control" rows="3"--}}
{{--                                                          placeholder="Enter ..."></textarea>--}}

{{--                                                <div class="invalid-feedback">--}}
{{--                                                    @error('content_blog')--}}
{{--                                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Content Blog</label>
                                                <textarea
                                                        class="note-codeable @error('isi') is-invalid @enderror"
                                                        area-multiline="true" id="summernote" name="isi">
                                                    {{ old('isi') }}
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

                                        <a href="{{route('blog')}}" class="btn btn-success"> <span class="fas fa-times">
                                                </span> Cancel</a>


                                        <button type="submit" class="btn btn-primary"><span class="fas fa-plus">
                                                </span>
                                            Add Blog
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