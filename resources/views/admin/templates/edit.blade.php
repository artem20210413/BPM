{{-- resources/views/admin/templates/edit.blade.php --}}
@extends('layouts.adminlte')
@section('title','Редактировать шаблон')
@section('page_title','Редактировать шаблон')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.templates.update', $template) }}" method="POST">
                @method('PUT')
                @include('admin.templates._form', ['template'=>$template])
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.templates.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
