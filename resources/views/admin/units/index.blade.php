{{-- resources/views/admin/units/index.blade.php --}}
@extends('layouts.adminlte')

@section('title','Единицы измерения')
@section('page_title','Единицы измерения')

@section('content')
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Список</h3>
            <a href="{{ route('admin.units.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Создать
            </a>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Приоритет</th>
                    <th>Название (ru)</th>
                    <th class="text-end">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($units as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->slug }}</td>
                        <td>{{ $unit->priority }}</td>
                        <td>{{ optional($unit->translate('ru'))->title }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.units.edit', $unit) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.units.destroy', $unit) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Удалить единицу?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted">Пока пусто</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($units->hasPages())
            <div class="card-footer">{{ $units->links() }}</div>
        @endif
    </div>
@endsection
