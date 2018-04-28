@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Категорий <span class="badge badge-light">4</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button type="button" class="btn btn-primary">
                        Материалов <span class="badge badge-light">4</span>
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
                <a href="#" class="btn btn-secondary btn-block">Создать категорию</a>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Категория первая</h5>
                        </div>
                        <p class="mb-1">Кол-во материалов</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-secondary btn-block">Создать материал</a>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Материал первый</h5>
                        </div>
                        <p class="mb-1">Категория</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection