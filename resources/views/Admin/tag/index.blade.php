@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тэги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Тэги</a></li>
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
                    <div class="col-2 mb-3">
                        <a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                        <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>

                                            <tr>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th colspan="3" >Действие</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tags as $tag)
                                                <tr>
                                                <td>{{$tag->id}}</td>
                                                <td>{{$tag->title}}</td>
                                                <td><a href="{{route('admin.tag.show',$tag->id)}}"><i class="far fa-eye"></i></a></td><td><a href="{{route('admin.tag.edit',$tag->id)}}"><i class="fas fa-pen text-success"></i></a></td>

                                                    <td>
                                                        <form action="{{route('admin.tag.delete',$tag->id)}} " method="post">
                                                        @csrf
                                                            @method('delete')
                                                            <button type="submit" class="border-0 bg-white">
                                                                <i class="fas fa-trash text-danger" role="button"></i>
                                                            </button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>

            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
