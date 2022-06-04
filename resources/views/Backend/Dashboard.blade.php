@extends('Backend/layout/layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$countKontak}}</h3>

                            <p> <i class="nav-icon far fa-envelope"></i> Kontak</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('kontak')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$countBlog}}</h3>

                            <p>Blog</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-user mr-1"></i>
                                Hallo {{ Auth::user()->name }}
                            </h3>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class=" tab-pane active "
                                     style="position: relative; height: 300px;  ">

                                    <h1 class="greetings"></h1>
                                    <h2 class="time"></h2>

                              </div>

                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

        <script>
            let greetings = document.querySelector('.greetings'),
                time = document.querySelector('.time');

            setInterval(setText, 1000);

            function setPrefix(hours) {

                let prefix = '';

                if(hours >= 12) {
                    prefix = "PM";
                } else {
                    prefix = "AM";
                }
                return prefix;
            };

            function calculateHours(hours) {

                if(hours >= 12) {
                    hours -= 12;
                }

                if(hours == 0) {
                    hours += 12;
                }

                return hours;
            };

            function addZero(minutes) {

                if(minutes < 10) {
                    minutes = `0${minutes}`;
                }
                return minutes;
            }

            function setText() {

                let today = new Date(),
                    hours = today.getHours(),
                    minutes = today.getMinutes();

                time.textContent = `${calculateHours(hours)}:${addZero(minutes)} ${setPrefix(hours)}`;

                if(hours >= 0 && hours < 12) {
                    greetings.textContent = 'Selamat Pagi <?php print(Auth::user()->name)  ?>';
                    greetings.style.setProperty('--color', 'orange');

                } else if(hours >= 12 && hours < 18) {
                    greetings.textContent = 'Good afternoon';
                    greetings.style.setProperty('--color', 'blue');

                } else if(hours >= 18 && hours < 24) {

                    greetings.textContent = 'Selamat Malam <?php print(Auth::user()->name)  ?>';
                    greetings.style.setProperty('--color', 'green');
                }

                if(minutes % 2 == 0) {
                    greetings.style.setProperty('--color', 'purple');
                }

            };

        </script>
@endsection
