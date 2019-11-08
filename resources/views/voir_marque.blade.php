   @extends('master')
@section('content')

 
@foreach($marques as $marque)
<hr>
<div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$marque->marque}}</h3>

                <p>votre confort est notre priorité</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <hr>

 @endforeach
@endsection