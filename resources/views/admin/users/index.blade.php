{{-- resources/views/admin/users/index.blade.php --}}
@extends('layouts.adminlte')

@section('title','Пользователи')
@section('page_title','Пользователи')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Список</h3>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Создать
            </a>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Роли</th>
                    <th class="text-end">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-secondary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Удалить пользователя?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted">Пока пусто</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($users->hasPages())
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @endif
    </div>
@endsection
