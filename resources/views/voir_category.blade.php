
   @extends('master')
@section('content')

 
@foreach($categories as $categorie)
<hr>
<div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$categorie->category}}</h3>

                <p>{{$categorie->prix}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<hr>
@endforeach
@endsection