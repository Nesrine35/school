@extends('layouts.app')


@section('title', 'ens')
@section('content')


    <div class="d-flex justify-content-between align-items-center">
        <h1>les enseignants</h1>
        <a href="{{ route('admin.enseignant.create') }}"class="btn btn-primary">ajouter un Enseignant </a>
    </div>
    @include('error')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date Naissance</th>

                <th>Email</th>
                <th>Telephone</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enseignants as $enseignant)
                <tr>
                    <td>{{ $enseignant->nom }}</td>
                    <td>{{ $enseignant->prenom }}</td>

                    <td>{{ $enseignant->dateNaissance }}</td>
                  
                    <td>{{ $enseignant->email }}</td>
                    <td>{{ $enseignant->telephone }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                     

                            <a href="{{ route('admin.enseignant.edit', $enseignant) }}"class="btn btn-primary">Editer</a>
                            <a href="{{ route('admin.enseignant.show', $enseignant) }}"class="btn btn-info">show</a>

                            <form action="{{ route('admin.enseignant.destroy', $enseignant->id) }}" method="post">
                                @method('delete')
                                @csrf

                                <button class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $enseignants->links() }}
@endsection
