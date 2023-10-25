@extends('layouts.app')
@section('title', 'ens')
@section('content')
    @include('error')
   
   
   <div class="d-flex justify-content-between align-items-center">
    <h1>les utilisateurs</h1>
    <a href="{{ route('new') }}"class="btn btn-primary">ajouter un utilisateur </a>
</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Role</th>
             
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userall as $user)
                <tr>
                    <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                  
                  <td class="d-flex gap-2 w-100 justify-content-end">
                    @can("delete",$user)
                    <a href="{{ route('edit', $user) }}"class="btn btn-primary">Editer</a>
                
                
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                      </button>
                 
                  @include('inputs.modal')
                  @endcan
             
                
                </td>
                
            
                </tr>
            @endforeach
        </tbody>
    </table>

   
@endsection
