@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label label-primary">
                        Категории 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label label-primary">
                        Материалы 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label label-primary">
                        Посетителей 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label label-primary">
                        Сегодня 0
                    </span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <a href="" class="btn btn-block btn-default">Создать категорию</a>
            <a href="" class="list-group-item">
                <h4 class="list-group-item-heading">Категория первая</h4>
                <p class="list-group-item-text">
                    Количество материалов
                </p>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="" class="btn btn-block btn-default">Добавить материал</a>
            <a href="" class="list-group-item">
                <h4 class="list-group-item-heading">Материал первый</h4>
                <p class="list-group-item-text">
                    Категория
                </p>
            </a>
        </div>
    </div>
</div>

@endsection