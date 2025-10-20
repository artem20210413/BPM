{{-- resources/views/admin/templates/create.blade.php --}}
@extends('layouts.adminlte')
@section('title','Создать шаблон')
@section('page_title','Создать шаблон')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.templates.store') }}" method="POST">
                @include('admin.templates._form')
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.templates.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
