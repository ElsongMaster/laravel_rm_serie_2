@extends('template.index')



@section('content')
    <h1>J'ai {{$age}} ans</h1>
    <div class="container-fluid d-flex justify-content-center w-80">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
        
            <div class="carousel-item active">
              <img src="{{asset('img/img3.jpg')}}" style = "height:400px; width:600px"class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/img4.jpg')}}" style = "height:400px; width:600px"class="d-block" alt="...">
            </div>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
@endsection