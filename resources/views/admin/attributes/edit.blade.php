{{-- resources/views/admin/attributes/edit.blade.php --}}
@extends('layouts.adminlte')

@section('title','Редактировать атрибут')
@section('page_title','Редактировать атрибут')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.attributes.update', $attribute) }}" method="POST">
                @method('PUT')
                @include('admin.attributes._form', ['attribute' => $attribute])
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.attributes.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
