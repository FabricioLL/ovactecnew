<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

use function Symfony\Component\String\b;

class UserController extends Controller
{
    public function index()
    {
        //Sirve para que al alterar el URL, el usuario que no tenga ese permiso no pueda acceder
        abort_if(Gate::denies('users.index'),403);

        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }


    public function create()
    {
        abort_if(Gate::denies('users.create'),403);

        $roles = Role::all()->pluck('name','id');
        return view('admin.user.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $user = User::create($request->only('name', 'username', 'email') + [
            'password' => bcrypt($request->input('password')),
        ]);
        $roles = $request->input('roles', []);
        $user->syncRoles($roles);
        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        abort_if(Gate::denies('users.show'),403);

        $user->load('roles');
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('users.edit'),403);

        $roles = Role::all()->pluck('name','id');
        $user->load('roles');
        return view('admin.user.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->only('name','email');
        $password = $request->input('password');

        if($password)
            $data['password'] = bcrypt($password);

        $user->update($data);
        $roles = $request->input('roles',[]);
        $user->syncRoles($roles);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('users.destroy'),403);

        if(auth()->user()->id == $user->id){
            return redirect()->route('users.index');
        }
        $user->delete();
        return back();
    }
}
