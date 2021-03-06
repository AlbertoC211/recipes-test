<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'filters' => Request::only(['search', 'role']),
            'users' => User::query()
                ->when(Request::input('search'), function($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
                ->when(Request::input('role'), function($query, $role) {
                    $query->where('owner', '=', $role == 'admin');
                })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'owner' => $user->owner,
                'photo' => $user->profile_photo_path ? URL::route('image', ['path' => $user->profile_photo_path, 'w' => 40, 'h' => 40, 'fit' => 'crop']) : null,
            ]),
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store()
    {
        $newUser = new CreateNewUser();
        $user = $newUser->create(Request::only(['name', 'last_name', 'email', 'owner', 'password', 'password_confirmation']));

        return Redirect::route('users')->with('success', 'User created.');
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'last_name' => $user->last_name,
                'owner' => $user->owner,
                'email' => $user->email,
                'photo' => $user->profile_photo_path ? URL::route('image', ['path' => $user->profile_photo_path, 'w' => 60, 'h' => 60, 'fit' => 'crop']) : null,
            ],
        ]);
    }

    public function update(User $user)
    {
        $updateUser = new UpdateUserProfileInformation();
        $updateUser->update($user, Request::all());

        return Redirect::back()->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $userDelete = new DeleteUser();
        $userDelete->delete($user);

        return Redirect::route('users')->with('success', 'User deleted.');
    }
}
