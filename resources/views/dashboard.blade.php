@extends('layouts.app')
@section('title', 'ens')
@section('content')
@include('error')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mb-4">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <h5>{{ $users }}</h5>
                    <a href="" class="card-link"> view detais</a>
                </div>
            </div>
        </div>
      
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mb-4">
                <div class="card-body">
                    <h5 class="card-title">Enseignants</h5>
                    <h5>{{ $enseignants }}</h5>
                    <a href="{{ route('admin.enseignant.index') }}" class="card-link"> view detais</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger mb-4">
                <div class="card-body">
                    <h5 class="card-title">Etudiants</h5>
                    <h5>{{ $etudiants }}</h5>
                    <a href="{{ route('admin.etudiant.index') }}" class="card-link"> view detais</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning mb-4">
                <div class="card-body">
                    <h5 class="card-title">Formations</h5>
                    <h5>{{ $formation }}</h5>
                    <a href="{{ route('admin.formation.index') }}" class="card-link"> view detais</a>
                </div>
            </div>
        </div>
    </div>
   
  
   

   
@endsection
