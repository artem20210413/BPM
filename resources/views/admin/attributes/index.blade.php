{{-- resources/views/admin/attributes/index.blade.php --}}
@extends('layouts.adminlte')

@section('title','Атрибуты')
@section('page_title','Атрибуты')

@section('content')
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Список</h3>
            <a href="{{ route('admin.attributes.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Создать
            </a>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Код</th>
                    <th>Тип</th>
                    <th>Ед. изм.</th>
                    <th>Приоритет</th>
                    <th>Название (ru)</th>
                    <th class="text-end">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($attributes as $attr)
                    <tr>
                        <td>{{ $attr->id }}</td>
{{--                        <td><code>{{ $attr->code }}</code></td>--}}
                        <td>{{ $attr->type }}</td>
                        <td>{{ $attr->unit?->slug }}</td>
                        <td>{{ $attr->priority }}</td>
                        <td>{{ optional($attr->translate('ru'))->title }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.attributes.edit', $attr) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.attributes.destroy', $attr) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Удалить атрибут?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted">Пока пусто</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($attributes->hasPages())
            <div class="card-footer">{{ $attributes->links() }}</div>
        @endif
    </div>
@endsection
