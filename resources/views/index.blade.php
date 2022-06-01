@extends('layout.layout')
@section('cont')
<div class="row justify-content-center">
    @forelse ($books as $book)
    <div class="card m-4 p-0 bg-success text-white" style="width: 18rem;" >
        <img src="{{$book->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title py-2">{{$book->title}}</h5>
            <p class="card-text overflow-auto" style="max-height: 300px" >{{$book->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-success text-white">Serie: {{$book->series}}</li>
            <li class="list-group-item bg-success text-white">Data di uscita: {{$book->sale_date}}</li>
            <li class="list-group-item bg-success text-white">Prezzo: {{$book->price}}$</li>
        </ul>
        <div class="card-body">
            <a href="{{route('book.show', $book->id)}}" class="btn btn-primary">Maggiori info</a>
            <a href="{{route('book.edit', $book->id)}}" class="btn btn-warning">Modifica</a>
            <form action="{{route('book.destroy', $book->id)}}" method="post">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Elimina</button> 
            </form>
            
        </div>
    </div>



    @empty
    <h1>Il DataBase è vuoto</h1>
    @endforelse

</div>



@endsection
