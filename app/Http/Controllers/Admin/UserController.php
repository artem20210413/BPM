<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->with('roles')->latest('id')->paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::query()->orderBy('name')->pluck('name', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // назначаем роли
//        $user->syncRoles($data['roles'] ?? []);
        $roleIds = $data['roles'] ?? [];
        $roles   = Role::whereIn('id', $roleIds)->get();

        $user->syncRoles($roles);

        return redirect()->route('admin.users.index')->with('success', 'Пользователь создан');
    }

    public function edit(User $user)
    {
        $roles = Role::query()->orderBy('name')->pluck('name', 'id');
        $userRoleIds = $user->roles()->pluck('id')->toArray();

        return view('admin.users.edit', compact('user', 'roles', 'userRoleIds'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        $user->name  = $data['name'];
        $user->email = $data['email'];

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();
        $roleIds = $data['roles'] ?? [];
        $roles   = Role::whereIn('id', $roleIds)->get();

        $user->syncRoles($roles);
//        $user->syncRoles($data['roles'] ?? []);

        return redirect()->route('admin.users.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(User $user)
    {
        // нельзя удалить себя
        if (auth()->id() === $user->id) {
            return back()->with('error', 'Нельзя удалить свой аккаунт');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Пользователь удалён');
    }
}
