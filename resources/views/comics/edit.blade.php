@extends ('layouts.app')

{{-- FORM EDIT - MODIFICA DATI IN INPUT--}}
@section('content')
    <div class="container">
        <h2>Modifica il fumetto che hai scelto!</h2>
        <div class="row">
            <div class="col-12">

                {{-- Messaggi di errore --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
                {{-- INIZIO FORM --}}
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" value="{{$comic->title}}" id="title" name="title" placeholder="titolo">
                    </div>
                    {{-- IMG --}}
                    <div class="form-group">
                        <label for="" class="control-label">Immagine</label>
                        <input type="text"class="form-control" value="{{$comic->thumb}}" id="thumb" name="thumb" placeholder="Copertina fumetto">
                    </div>
                    {{-- SERIE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Serie</label>
                        <input type="text"class="form-control" value="{{$comic->series}}" id="series" name="series" placeholder="Serie">
                    </div>
                    {{-- PREZZO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" class="form-control"id="price" value="{{$comic->price}}" name="price" placeholder="Prezzo">
                    </div>
                    {{-- TIPO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Tipo</label>
                        <input type="text"class="form-control" value="{{$comic->type}}" id="type" name="type" placeholder="Tipo">
                    </div>
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button class="btn btn-danger mt-3" type="submit"class="form-control">Salva le modifiche</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection