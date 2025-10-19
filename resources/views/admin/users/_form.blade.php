{{-- resources/views/admin/users/_form.blade.php --}}
@csrf

<div class="mb-3">
    <label class="form-label">Имя</label>
    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
           class="form-control @error('name') is-invalid @enderror" required>
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"
           class="form-control @error('email') is-invalid @enderror" required>
    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
           @empty($user) required @endempty>
    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    @isset($user)
        <small class="text-muted">Оставьте пустым, если не хотите менять пароль</small>
    @endisset
</div>

<div class="mb-3">
    <label class="form-label">Подтверждение пароля</label>
    <input type="password" name="password_confirmation" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Роли</label>
    <div class="row">
        @foreach($roles as $roleId => $roleName)
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input"
                           type="checkbox"
                           id="role_{{ $roleId }}"
                           name="roles[]"
                           value="{{ $roleId }}"
                        @checked( in_array($roleId, old('roles', $userRoleIds ?? [])) )>
                    <label class="form-check-label" for="role_{{ $roleId }}">{{ $roleName }}</label>
                </div>
            </div>
        @endforeach
    </div>
</div>
