{{-- resources/views/admin/templates/index.blade.php --}}
@extends('layouts.adminlte')

@section('title','Шаблоны')
@section('page_title','Шаблоны')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Список</h3>
            <a href="{{ route('admin.templates.create', request()->all()) }}" class="btn btn-primary"><i
                    class="fas fa-plus"></i> Создать</a>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Атрибут</th>
                    <th>Название (ru)</th>
                    <th class="text-end">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($templates as $tpl)
                    <tr>
                        <td>{{ $tpl->id }}</td>
                        <td>{{ $tpl->attribute?->translate('ru')?->title }}</td>
                        <td>{{ $tpl->translate('ru')?->title }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.templates.edit', [$tpl] + request()->all()) }}"
                               class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.templates.destroy', $tpl) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Удалить шаблон?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Нет данных</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($templates->hasPages())
            <div class="card-footer">{{ $templates->links() }}</div>
        @endif
    </div>
@endsection
