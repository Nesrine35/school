@extends('client.navigation')
@section('body')
    <div class="container">
        <div class="col-6 mt-4 image">
            @if ($formation->image)
                <img src="{{ $formation->urlImage() }}" class="card-img-top">
            @endif
        </div>
        <div class="row">
            <div class="col-6 mt-4">
                <table class="table table-success table-striped">


                    <tbody>
                        <tr>
                            <th scope="col">Formation</th>
                            <td>{{ $formation->label }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Dureé</th>
                            <td>{{ $formation->dure }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Description</th>
                            <td>{{ $formation->description }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-6 mt-4">
                <div class="container border">
                    <div class="fw-bold">
                        Contacter
                    </div>

                    <form action="{{route('contact')}}"method="post">
                      @csrf
                        <div class="mb-3">
                           @include('inputs.input',['label'=>"Nom",'name'=>'nom','type'=>'texte'])
                        </div>
                        <div class="mb-3">
                          @include('inputs.input',['label'=>"prenom",'name'=>'prenom','type'=>'texte'])
                        </div>
                        <div class="mb-3">
                          @include('inputs.input',['label'=>"telephone",'name'=>'telephone','type'=>'texte'])
                        </div>
                        <div class="mb-3">
                          @include('inputs.input',['label'=>"email",'name'=>'email','type'=>'texte'])
                        </div>
                        <div class="mb-3">
                          @include('inputs.input',['label'=>"message",'name'=>'message','type'=>'textarea'])
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endsection
