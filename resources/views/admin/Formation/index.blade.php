@extends('layouts.app')


@section('title', 'ens')
@section('content')


    <div class="d-flex justify-content-between align-items-center">
        <h1>les formations</h1>
        <a href="{{ route('admin.formation.create') }}"class="btn btn-primary">ajouter une formation </a>
    </div>
    @include('error')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>label</th>
                <th>date debut</th>
                <th>Date fin</th>

                <th>dure</th>
                <th>active</th>
                <th>description</th>
               
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $formation)
                <tr>
                    <td>{{ $formation->label }}</td>
                    <td>{{ $formation->dateDebut }}</td>

                    <td>{{ $formation->dateFin }}</td>
                  
                    <td>{{ $formation->dure }}</td>
                    <td>
                        @if($formation->active == '1')
                        <p class="fw-bolder text-success">
                        {{"active" }}
                        </p>
                    @else
                    <p class="fw-bolder text-danger">
                    {{"désactive"}}
                    </p>
                    @endif</td>
                    <td>{{ $formation->description }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                     

                            <a href="{{ route('admin.formation.edit', $formation) }}"class="btn btn-primary">Editer</a>
                            <a href="{{ route('admin.formation.show', $formation) }}"class="btn btn-primary">Etudiants</a>
                           

                            <form action="{{ route('admin.formation.destroy', $formation->id) }}" method="post">
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
    {{ $formations->links() }}
@endsection
