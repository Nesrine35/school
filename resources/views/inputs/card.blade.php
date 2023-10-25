<div class="card" style="width: 18rem;">
  @if($formation->image)
  <img src="{{$formation->urlImage()}}" class="card-img-top">
@endif
 
    <div class="card-body">
        <div class="text-success">
            <h5 class="card-title">
                <a href="{{ route('client.formation.show', ['formation' => $formation]) }}">{{ $formation->label }}</a>
            </h5>
    </div>
    <hr>
      <h6 class="card-subtitle mb-2 text-muted">{{$formation->dure}}</h6>
      <p class="lh-sm">{{$formation->description}}</p>
    
    </div>
  </div>