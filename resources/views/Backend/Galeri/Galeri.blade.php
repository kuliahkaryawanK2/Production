@extends('Backend/layout/layout')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Data Galeri</h4>
                                <a href="{{route('addGaleri')}}" class="btn btn-success float-right">Tambah Data Galeri</a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="btn-group w-100 mb-2">
                                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Semua </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="sosial-media"> Design Sosial Media</a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="webiste"> Website </a>

                                    </div>
                                    <div class="mb-2">
                                        <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle
                                            items </a>
                                        <div class="float-right">
                                            <select class="custom-select" style="width: auto;" data-sortOrder>
                                                <option value="index"> Sort by Position</option>
                                                <option value="sortData"> Sort by Custom Data</option>
                                            </select>
                                            <div class="btn-group">
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortAsc>
                                                    Ascending </a>
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortDesc>
                                                    Descending </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="filter-container p-0 row">
                                        @foreach($dataGaleri as $data)
                                        <div class="filtr-item col-sm-2" data-category="{{$data->category}}" data-sort="white sample">
                                            <a href="{{ url('/galeri'). "/".$data->image }}"
                                               data-toggle="lightbox" data-title="{{$data->name_image}}">
                                                <img  src="{{ url('/galeri'). "/".$data->image }}"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                                <a class="btn btn-danger" href="{{route('deleteGaleri', $data->id)}}"> Delete</a>
                                            </a>
                                        </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

@endsection
