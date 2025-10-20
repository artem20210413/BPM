{{-- resources/views/admin/attributes/create.blade.php --}}
@extends('layouts.adminlte')

@section('title','Создать атрибут')
@section('page_title','Создать атрибут')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.attributes.store') }}" method="POST">
                @include('admin.attributes._form')
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.attributes.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
