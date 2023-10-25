@extends('layouts.app')


@section('title', 'ens')
@section('content')


    <div class="d-flex justify-content-between align-items-center">
        <h1>les etudiants</h1>
        <a href="{{ route('admin.etudiant.create') }}"class="btn btn-primary">ajouter un etudiant </a>
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
            @foreach ($etudiants as $etudiant)
                <tr>
                    <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>

                    <td>{{ $etudiant->dateNaissance }}</td>
                  
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                     

                            <a href="{{ route('admin.etudiant.edit', $etudiant) }}"class="btn btn-primary">Editer</a>
                            <a href="{{ route('admin.etudiant.show', $etudiant) }}"class="btn btn-info">show</a>

                            <form action="{{ route('admin.etudiant.destroy', $etudiant->id) }}" method="post">
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
    {{ $etudiants->links() }}
@endsection
