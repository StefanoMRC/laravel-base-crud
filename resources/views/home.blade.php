@extends('layout.layout')
@section('cont')
<div class="row">
    @forelse ($books as $book)
    <div class="card m-4 p-0 bg-success text-white" style="width: 18rem;">
        <img src="{{$book->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">{{$book->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-success text-white">Serie: {{$book->series}}</li>
          <li class="list-group-item bg-success text-white">Data di uscita: {{$book->sale_date}}</li>
          <li class="list-group-item bg-success text-white">Prezzo: {{$book->price}}$</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
    </div>



    @empty
        <h1>Il DataBase è vuoto</h1>
    @endforelse

</div>



@endsection