@extends('master')
@section('content')
 <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ajouter les Marques</h3>
              </div>
              <div class="card-body">
<form method="post" action="{{route('add_marque')}}" >

  @csrf
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Marque</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="marque" value=" {{old('marque')}} ">

    @if($errors->first('marque'))
    <p class="alert alert-danger">{{$errors->first('marque') }}</p>
    @endif
    
  </div>


  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
  </div>
</form>
</div></div>

@endsection