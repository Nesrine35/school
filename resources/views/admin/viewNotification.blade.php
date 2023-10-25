@extends('layouts.app')


@section('title', 'ens')
@section('content')
<div class="container">
 


<table class="table border-2">
    <thead>
      <tr>
        <th scope="col">message</th>
       

      </tr>
    </thead>
    <tbody>
   
      <tr>
        <th scope="row">{{$notification->data['message']}}</th>

        
      </tr>

    </tbody>
  </table>
</div>
@endsection