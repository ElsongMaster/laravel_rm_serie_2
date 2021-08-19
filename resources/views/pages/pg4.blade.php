@extends('template.index')


@section('content')

<h1>Bienvenue sur ma page 4</h1>
<div class="container-fluid d-flex justify-content-center w-80">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($tabOutils as $outil )
          
      <tr>
        <th scope="row">{{$outil->nom}}</th>
  
      </tr>
      @endforeach

  </tbody>
</table>
</div> 
@endsection