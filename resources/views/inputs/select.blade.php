@php
    
    $class ??= null;
    
    $name ??= ' ';
    $label ??= ucfirst($name);
    $value ??= '';
@endphp
<div class="mb-3">
    <label for="category" class="form-label"> category </label>
    <select class="form-control"i d="category" name="formations_id">
        <option value="">selectionner une formation</option>
        @foreach($formations as $formation)
        <option @if(old('formations_id', $etudiant->formations_id) == $formation->id) selected @endif value="{{$formation->id}}">{{$formation->label}}</option>

        @endforeach
    </select>
   @error('formations_id')
       {{ $message }}
   @enderror
  </div>
