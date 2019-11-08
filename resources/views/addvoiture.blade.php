@extends('master')
@section('content')
 <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ajout Voiture</h3>
              </div>
              <div class="card-body">
<form method="post" action="{{route('addpostvoiture')}}" enctype="multipart/form-data">

  @csrf
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Puissance</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="puissance" value=" {{old('puissance')}} ">

    @if($errors->first('puissance'))
    <p class="alert alert-danger">{{$errors->first('puissance') }}</p>
    @endif
    
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Couleur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="couleur" value=" {{old('couleur')}} ">
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="image[]" >
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="image[]" >
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="image[]" >
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="image[]" >
  </div>
  
<div class="form-group">
    <label for="exampleFormControlSelect1">Modèle</label>
    <select class="form-control" id="exampleFormControlSelect1" name="modele_id">
   
      @foreach($modeles as $modele)
      <option value="{{$modele->id}}">{{$modele->model}}</option>
      @endforeach
    </select>
  </div>





  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
  </div>
</form>
</div></div>

@endsection