@extends ('layouts.app')

{{-- PAGINA DI ATTERRAGGIO --}}
@section('content')
<div class="container">
    {{-- Pulsante Form/ Create --}}
    <div class="d-flex justify-content-center">
        <button class="btn btn-lg btn-success mt-5">
            <a class="text-light text-decoration-none" href="{{route('comics.create')}}">
                Aggiungi un fumetto :3 
            </a>
        </button>
    </div>
    
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4">

                {{-- Copertina fumetto + titolo --}}
                <div class="card mt-5">
                    <img class="img-fluid card-img-top h-50" src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">
                    <div class="card-text"> <h4> {{$comic->title}} </h4></div>

                    <div class="d-flex justify-content-around p-3">
                        {{-- Pulsante dettagli/Show--}}
                        <button class="btn btn-warning">
                            <a class="text-decoration-none text-dark" href="{{route('comics.show', $comic->id)}}"> Scopri di più!</a>
                        </button>
                        {{-- Pulsante Modifica form --}}
                        <button class="btn btn-sm btn-primary">
                            <a class="text-light text-decoration-none" href="{{route('comics.edit',$comic->id)}}">
                                Modifica il fumetto!
                            </a>
                        </button>
                    </div>
                    {{-- Delate --}}
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        Elimina
                    </button>

                    </form>
                </div>
            </div>
            @endforeach

        </div>

    </div>

@endsection