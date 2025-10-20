{{-- resources/views/admin/units/edit.blade.php --}}
@extends('layouts.adminlte')

@section('title','Редактировать единицу')
@section('page_title','Редактировать единицу')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.units.update', $unit) }}" method="POST">
                @method('PUT')
                @include('admin.units._form')
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.units.index') }}" class="btn btn-secondary">Отмена</a>
                    <button class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
