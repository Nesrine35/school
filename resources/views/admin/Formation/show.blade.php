@extends('layouts.app')
@section('title', 'ens')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            @php $rowNumber = 1 @endphp
            <th> # </th>
            <th>Nom</th>
            <th>Prenom</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>  
    <tbody>
        @foreach ($etud as $formation) 
        <td>{{ $rowNumber }}</td>
       
                <td>{{ $formation->nom }}</td>
                <td>{{ $formation->prenom }}</td>
                <td></td>
            </tr>
            @php $rowNumber++ @endphp
        @endforeach
     
    </tbody>
</table>
@endsection