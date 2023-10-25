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
        @if(($notification->read_at) == null)
      <tr>
        <th class="fw-bold">{{$notification->data['nom']}}</th>
        <th class="fw-bold">{{$notification->data['prenom']}}</th>
        <th class="fw-bold">{{$notification->data['email']}}</th>
        <th class="fw-bold">{{$notification->data['telephone']}}</th>
        <th class="fw-bold"><a href="{{route('viewNotification',['id'=>$notification->id])}}"><i class="ti ti-info-circle"></i></a> <i class="ti ti-eye-closed"></i><i class="ti ti-trash"></i></th>
      
        
      </tr>
   
          
      @else
      <tr>
        <th class="fw-lighter">{{$notification->data['nom']}}</th>
        <th class="fw-lighter">{{$notification->data['prenom']}}</th>
        <th class="fw-lighter">{{$notification->data['email']}}</th>
        <th class="fw-lighter">{{$notification->data['telephone']}}</th>
        <th class="fw-lighter"><a href="{{route('viewNotification',['id'=>$notification->id])}}"><i class="ti ti-info-circle"></i></a></th>
        
      </tr> 
  
      @endif

      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
@endsection