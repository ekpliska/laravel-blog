@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    
    @component('admin.components.breadcrumbs')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категория @endslot
    @endcomponent
    
    <hr />
    
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right">Добавить категорию</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Наизвание категории</th>
                <th>Публикация</th>
                <th class="text-right">Действия</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key => $category)
            <tr>
                <td>
                    {{ $category->title }}
                </td>
                <td>
                    {{ $category->published }}
                </td>
                <td>
                    <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}">Редактировать</a>
                    <a href="{{ route('admin.category.destroy', ['id' => $category->id]) }}">Удалить</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    Категории отсутствуют
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
</div>

@endsection