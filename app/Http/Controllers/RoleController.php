<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('roles.index'),403);

        $roles = Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }


    public function create()
    {
        abort_if(Gate::denies('roles.create'),403);

        $permissions = Permission::all()->pluck('description','id');
        return view('admin.role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($request->only('name'));
        $role->syncPermissions($request->input('permissions',[]));
        return redirect()->route('roles.index');
    }


    public function show(Role $role)
    {
        abort_if(Gate::denies('roles.show'),403);

        $role->load('permissions');
        return view('admin.role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        abort_if(Gate::denies('roles.edit'),403);

        $permissions = Permission::all()->pluck('description','id');
        $role->load('permissions');
        return view('admin.role.edit', compact('role','permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        $role->syncPermissions($request->input('permissions',[]));
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('roles.destroy'),403);

        $role->delete();
        return back();
    }
}
