@extends('master')
@section('content')

@foreach($voitures as $voiture)
   <hr>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">

          <h2 class="display-5">BMW</h2>
          <p class="lead">{{$voiture->puissance}} -- <em>{{$voiture->couleur}}</em></p> 
        </div>
      @if(count($voiture->photos)>0)
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="{{ asset('image/'.$voiture->photos->first()->photo)}} " >
        </div>
      @else
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="{{ asset('image/car-icon-png_135042.jpg')}}" style="width: 17rem">
        </div>
      @endif

@endforeach
@endsection