@extends('layouts.app')


@section('title', 'ens')
@section('content')
    @include('error')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action=""method="post">
                        @csrf
                 
                        <div class="row">
                            <h1>Gérer les </h1>
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Nom',
                                'name' => 'name',
                                'value' => $user->name,
                            ])

                        </div>



                        @include('inputs.input', [
                            'class' => 'col',
                            'label' => 'Email',
                            'name' => 'email',
                            'value' => $user->email,
                        ])
                        @include('inputs.input', [
                            'class' => 'col',
                            'label' => 'pass',
                            'name' => 'password',
                            'value' => $user->password,
                        ])


                        <div class="mb-3">
                            <label for="role" class="form-label">Rôle</label>
                            <select class="form-control" id="role" name="role">
                                <option value="">Sélectionner un rôle</option>
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                <option value="bigadmin" {{ old('role', $user->role) == 'bigadmin' ? 'selected' : '' }}>Big Admin</option>
                            </select>
                            
                        </div>

                        <button class="btn btn-primary mt-4">Modifier</button>

                    </form>

                </div>
            </div>
        </div>
    @endsection
