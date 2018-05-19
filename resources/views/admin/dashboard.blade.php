@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Категорий <span class="badge badge-light">{{$count_categories}}</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Материалов <span class="badge badge-light">{{$count_articles}}</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Посетителей <span class="badge badge-light">4</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Сегодня <span class="badge badge-light">4</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-secondary btn-block">Создать категорию</a>
                <div class="list-group">
                @foreach($categories as $category)

                        <a href="{{route('admin.category.edit', $category)}}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$category->title}}</h5>
                            </div>
                            <p class="mb-1">
                                {{$category->articles()->count()}}
                            </p>
                        </a>

                @endforeach
            </div>
            </div>
            <div class="col-sm-6">
                <a href="{{route('admin.article.create')}}" class="btn btn-secondary btn-block">Создать материал</a>

                <div class="list-group">
                    @foreach($articles as $article)
                        <a href="{{route('admin.article.edit', $category)}}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$article->title}}</h5>
                            </div>
                            <p class="mb-1">
                                {{$article->categories()->pluck('title')->implode(', ')}}
                            </p>
                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection