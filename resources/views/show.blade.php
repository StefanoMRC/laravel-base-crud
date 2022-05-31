@extends('layout.layout')
@section('cont')
<div class="row p-5 justify-content-center">
    <div class="card mb-3 p-0 bg-warning" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$book->thumb}}" class=" rounded-start img-fluid" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body mx-1">
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">{{$book->description}}</p>
              <p class="card-text"><small class="text-muted">Serie: {{$book->series}}</small></p>
              <p class="card-text"><small class="text-muted">Data di uscita: {{$book->sale_date}}</small></p>
              <p class="card-text"><small class="text-muted">Prezzo: {{$book->price}}$</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection