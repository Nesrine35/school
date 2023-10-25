
@extends('layouts.app')


@section('title',"ens")
   @section('content')
   @include('error')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('admin.enseignant.update',$enseignant)}}"method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <h1>Gérer les enseignants</h1>
                            @include('inputs.input', ['class' => 'col', 'label' => 'Nom', 'name' => 'nom','value'=>$enseignant->nom])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Prenom',
                                'name' => 'prenom',
                                'value'=>$enseignant->prenom
                            ])
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Date de Naissance',
                                'name' => 'dateNaissance',
                                'type'=>'date',
                                'value'=>$enseignant->dateNaissance
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Spécialité',
                                'name' => 'specialite',
                                'value'=>$enseignant->specialite
                            ])
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Adresse',
                                'name' => 'address',
                                'value'=>$enseignant->address
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Email',
                                'name' => 'email',
                                'value'=>$enseignant->email
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Telephone',
                                'name' => 'telephone',
                                'value'=>$enseignant->telephone
                            ])
                        </div>
                        <button class="btn btn-primary mt-4">Modifier</button>

                    </form>
                    
                </div>
            </div>
        </div>
        @endsection