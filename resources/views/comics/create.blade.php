@extends ('layouts.app')

{{-- FORM --}}
@section('content')
    <div class="container">
        <h2>Compila la form per aggiungere il tuo fumetto preferito!</h2>
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
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="titolo">
                        @error('title')
                            <div class="invalid-feedback"> {{$message}}</div>
                        @enderror
                    </div>
                    {{-- IMG --}}
                    <div class="form-group">
                        <label for="" class="control-label">Immagine</label>
                        <input type="text"class="form-control" id="thumb" name="thumb" placeholder="Copertina fumetto">
                        @error('thumb')
                            <div class="invalid-feedback"> {{$message}}</div>
                        @enderror
                    </div>
                    {{-- SERIE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Serie</label>
                        <input type="text"class="form-control" id="series" name="series" placeholder="Serie">
                        @error('series')
                            <div class="invalid-feedback"> {{$message}}</div>
                        @enderror
                    </div>
                    {{-- PREZZO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" class="form-control"id="price" name="price" placeholder="Prezzo">
                        @error('price')
                            <div class="invalid-feedback"> {{$message}}</div>
                        @enderror
                    </div>
                    {{-- TIPO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Tipo</label>
                        <input type="text"class="form-control" id="type" name="type" placeholder="Tipo">
                        @error('type')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button class="btn btn-success mt-3" type="submit"class="form-control">Salva</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection