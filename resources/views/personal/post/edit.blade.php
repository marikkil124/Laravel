@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Редактирование постов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-12">

                        <form action="{{route('admin.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control col-5"  name="title"  placeholder="Название поста"
                                value="{{$post->title}}">
                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-group col-12 ">
                                <textarea id="summernote" name="content">
                               {{$post->content}}
                                </textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить превью</label>


                                <div class="w-25">
                                    <img src="{{url('storage/'.$post->preview_image)}}" alt="preview_image" class="w-50" >
                                </div>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label  class="custom-file-label">  </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>

                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить изображение</label>

                                <div class="w-50 mb-2">
                                    <img src="{{url('storage/'.$post->main_image)}}" alt="main_image" class="w-50">
                                </div>



                                <div class="input-group">
                                    <div class="custom-file">
                                        <input  type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" > </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select class="form-control col-5" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == $post->category_id? 'selected' :''}}
                                        >{{$category->title}}</option>
                                    @endforeach

                                </select>

                                <div class="form-group col-5">
                                    <label>Тэги</label>
                                    <select class="select2" multiple="multiple"  name="tag_ids[]"   data-placeholder="выберите теги" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}"
                                                {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id,$post->tags->pluck('id')->toArray()) ? 'selected':''}}
                                            >{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <input type="submit" class="btn btn-primary" value="Изменить">
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
