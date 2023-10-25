@extends('layouts.app')


@section('title', 'ens')
@section('content')



    <table class="table table-striped">
       
        <tbody>

           
            <tr><td>Nom    <td>{{ $etudiant->nom }}</td></tr>
            <tr><td>Prenom    <td>{{ $etudiant->prenom }}</td></tr>
            <tr><td>Date de Naissance    <td>{{ $etudiant->dateNaissance }}</td></tr>
            <tr><td>Adress    <td>{{ $etudiant->address }}</td></tr>
            <tr><td>Email    <td>{{ $etudiant->email }}</td></tr>
            <tr><td>Téléphone    <td>{{ $etudiant->telephone }}</td></tr>
            <tr><td>Formation    <td>{{$etudiant->Formations?->label}}</td></tr>
         

                
        </tbody>
    </table>

@endsection
