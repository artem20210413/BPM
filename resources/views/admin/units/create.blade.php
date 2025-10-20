{{-- resources/views/admin/units/create.blade.php --}}
@extends('layouts.adminlte')

@section('title','Создать единицу')
@section('page_title','Создать единицу')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.units.store') }}" method="POST">
                @include('admin.units._form')
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.units.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
