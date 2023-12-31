@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Главная</li>
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
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Пользователи</p>
                                <p>Создано: {{ $data['usersCreatedInPeriod'] }} пользователей</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{route('admin.user.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['tasksCount'] }}</h3>
                                <p>Задачи</p>
                                <p>Создано: {{ $data['tasksCreatedInPeriod'] }} задачи</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-clipboard"></i>
                            </div>
                            <a href="{{route('admin.task.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['projectsCount'] }}</h3>

                                <p>Проекты</p>
                                <p>Создано: {{ $data['projectsCreatedInPeriod'] }} проектов</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-th-list"></i>
                            </div>
                            <a href="{{route('admin.project.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.main.index') }}" method="GET" class="form-inline">
                            <div class="form-group mx-2">
                                <label for="start_date">Начальная дата:</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="form-group mx-2">
                                <label for="end_date">Конечная дата:</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Применить</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


