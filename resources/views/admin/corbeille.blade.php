@extends('layouts.app')


@section('title', 'ens')
@section('content')
<div class="row">
<div id="list-example" class="list-group col-3 ml-0">
  @include('admin.notificationbarre')
</div>
  <div class="container col-9">


 

<table class="table border-2">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($notifications as $notification)
     
      <tr>
        <th class="fw-bold">{{$notification->data['nom']}}</th>
        <th class="fw-bold">{{$notification->data['prenom']}}</th>
        <th class="fw-bold">{{$notification->data['email']}}</th>
        <th class="fw-bold">{{$notification->data['telephone']}}</th>
<td> <form action="{{ route('deleteNotificationfinal', $notification) }}" method="post">
    @method('delete')
    @csrf

    <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
</form></td>
      
        
      </tr>

      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
@endsection