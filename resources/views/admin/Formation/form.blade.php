
@extends('layouts.app')


@section('title',"ens")
   @section('content')
   @include('error')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('admin.formation.store')}}"method="post"enctype="multipart/form-data">
                        @csrf
                    
                        <div class="row">
                            <h1>Gérer les formations</h1>
                            @include('inputs.input', ['class' => 'col', 'label' => 'label', 'name' => 'label'])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'dateDebut',
                                'name' => 'dateDebut',
                                'type'=>'date',
                             
                            ])
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Date Fin',
                                'name' => 'dateFin',
                                'type'=>'date',
                             
                            ])
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'dure',
                                'name' => 'dure',
                            'type'=>'time'
                            
                            ])
                             @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'image',
                                'name' => 'image',
                            'type'=>'file'
                            
                            ])
                           
                        </div>
                        <div class="row">
                            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'Decription',
                                'name' => 'description',
                                'type'=>'textarea',
                         
                            ])
                            
                        
                        </div>
                        <div class="row">
                         
                               @include('inputs.checkbox', [
                                'class' => 'col',
                                'label' => 'active',
                                'name' => 'active',
                            
                            ])
                        </div>
                        <button class="btn btn-primary mt-4">ajouter</button>

                    </form>
                    
                </div>
            </div>
        </div>
        @endsection