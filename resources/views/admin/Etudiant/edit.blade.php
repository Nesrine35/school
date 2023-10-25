
@extends('layouts.app')


@section('title',"ens")
   @section('content')
   @include('error')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('admin.etudiant.update',$etudiant)}}"method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <h1>Gérer les etudiants</h1>
                            @include('inputs.input', ['class' => 'col', 'label' => 'Nom', 'name' => 'nom','value'=>$etudiant->nom])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Prenom',
                                'name' => 'prenom',
                                'value'=>$etudiant->prenom
                            ])
                        </div>
                       
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Date de Naissance',
                                'name' => 'dateNaissance',
                                'type'=>'date',
                                'value'=>$etudiant->dateNaissance
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Spécialité',
                                'name' => 'specialite',
                                'value'=>$etudiant->specialite
                            ])
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Adresse',
                                'name' => 'address',
                                'value'=>$etudiant->address
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Email',
                                'name' => 'email',
                                'value'=>$etudiant->email
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Telephone',
                                'name' => 'telephone',
                                'value'=>$etudiant->telephone
                            ])
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'lieu  de naissance',
                                'name' => 'lieuNaissance',
                                'value'=>$etudiant->lieuNaissance
                            ])
                        </div>
                        @include('inputs.select',['name'=>'formations_id','label'=>'formations','value'=>$etudiant->formation()->pluck('id'),'formations'=>$formations])
                       
                        <button class="btn btn-primary mt-4">Modifier</button>

                    </form>
                    
                </div>
            </div>
        </div>
        @endsection