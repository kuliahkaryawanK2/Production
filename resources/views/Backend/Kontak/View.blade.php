@extends('Backend/layout/layout')
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kontak Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('kontak')}}">Data Kontak Masuk</a></li>
                        <li class="breadcrumb-item active">Kontak Masuk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('kontak')}}" class="btn btn-primary btn-block mb-3">Kembali Ke Kontak Masuk</a>
                    <div class="card">

                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="{{route('kontak')}}" class="nav-link">
                                        <i class="fas fa-inbox"></i> Kontak Masuk
                                        <span class="badge bg-primary float-right">{{$countDataKontak}}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>



                </div>

                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Kontak Masuk</h3>

                        </div>

                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Nama :{{$dataKontak->nama}}</h5>
                                <br/>
                                <h6>Email : {{$dataKontak->email}}</h6>
                                <h6>No Telp : {{$dataKontak->no_hp}}</h6>
                                <h6>Waktu : {{$dataKontak->created_at}}</h6>


                            </div>



                            <div class="mailbox-read-message">
                                <p>{{$dataKontak->isi_pesan}}</p>

                            </div>

                        </div>



                        <div class="card-footer">

                            <a href="{{route('deleteKontak', $dataKontak->id)}}" class="btn btn-default"><i class="far fa-trash-alt"></i> Hapus Pesan</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</div>
@endsection