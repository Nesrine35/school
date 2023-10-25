@extends('layouts.app')


@section('title', 'ens')
@section('content')



    <table class="table table-striped">
       
        <tbody>

           
            <tr><td>Nom    <td>{{ $enseignant->nom }}</td></tr>
            <tr><td>Prenom    <td>{{ $enseignant->prenom }}</td></tr>
            <tr><td>Date de Naissance    <td>{{ $enseignant->dateNaissance }}</td></tr>
            <tr><td>Adress    <td>{{ $enseignant->address }}</td></tr>
            <tr><td>Email    <td>{{ $enseignant->email }}</td></tr>
            <tr><td>Téléphone    <td>{{ $enseignant->telephone }}</td></tr>
               

                
        </tbody>
    </table>

@endsection
