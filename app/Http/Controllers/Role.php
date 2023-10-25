<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Role extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class,'user');
    }
    public function index()
    {
        $userall = User::all();
        return view('admin.users.index', [
            'userall' => $userall
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(UsersRequest $request)
    {
        $user = new User();
        return view('admin.users.form', [
            'user' => $user,
           // 'password' => Hash::make($request->password),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersRequest $request)
    {
        $user = User::create($request->validated());
        return to_route('users')->with('success', "ajouter avec succes"); //le nom ta3 la route li tedi ll index
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
       // dd(Auth::user()->can('delete',$user));
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsersRequest $request, User $user)

    {
        $user->update($request->validated());

        return redirect()->route('users')->with('success', 'modifier avec succes');
    }
}
