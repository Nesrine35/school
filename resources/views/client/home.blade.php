@extends('client.navigation')
@section('title','Home')
@section('body')
<div class="container mt-4">
<div class="row">
@foreach($formations as $formation)
<div class="col-3 mb-4">
@include('inputs.card')
</div>
@endforeach
</div>
</div>
{{$formations->links()}}
@endsection