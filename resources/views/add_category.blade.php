@extends('master')
@section('content')
 <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ajouter Catégorie</h3>
              </div>
              <div class="card-body">
<form method="post" action="{{route('add_category')}}" >

  @csrf
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Catégorie</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="category" value=" {{old('category')}} ">

    @if($errors->first('category'))
    <p class="alert alert-danger">{{$errors->first('category') }}</p>
    @endif
    
  </div>



  <div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="prix" value=" {{old('prix')}} ">

    @if($errors->first('prix'))
    <p class="alert alert-danger">{{$errors->first('prix') }}</p>
    @endif
    
  </div>


  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
  </div>
</form>
</div></div>

@endsection