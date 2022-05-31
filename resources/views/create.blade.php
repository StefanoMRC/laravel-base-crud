@extends('layout.layout')
@section('cont')
<h1 class="text-center my-5 text-uppercase">Inserisci qui il tuo nuovo fumetto</h1>


<form action="{{route('book.store')}}" method="post">

    @csrf
    <div class="row px-5 justify-content-center">
        <div class="col-12">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Titolo</span>
                <input  id="title" type="text" name="title" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <div class="col-12">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Descrizione</span>
                <input id="description" type="text" name="description" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <div class="col-4">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Immagine</span>
                <input id="thumb" type="text" name="thumb" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Prezzo</span>
                <input id="price" type="text" name="price" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Serie</span>
                <input id="series" type="text" name="series" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Data di uscita</span>
                <input id="sale_date" type="text" name="sale_date" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group mb-3 "">
                <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                <input id="type" type="text" name="type" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-warning w-25">Invia i tuoi dati</button>
    </div>
    
</form>
@endsection
