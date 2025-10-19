{{-- resources/views/admin/users/create.blade.php --}}
@extends('layouts.adminlte')

@section('title','Создать пользователя')
@section('page_title','Создать пользователя')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @include('admin.users._form')
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
