{{-- resources/views/admin/users/edit.blade.php --}}
@extends('layouts.adminlte')

@section('title','Редактировать пользователя')
@section('page_title','Редактировать пользователя')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @method('PUT')
                @include('admin.users._form', ['user' => $user])
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
