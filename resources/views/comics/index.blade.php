@extends ('layouts.app')

{{-- PAGINA DI ATTERRAGGIO --}}
@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4">
                {{-- Copertina fumetto + titolo --}}
                <a href="{{route('comics.show', $comic->id)}}">
                    <div class="card mt-5">
                        <img class="img-fluid card-img-top" src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">
                        <h3> {{$comic->title}}</h3>
                    </div>
                </a>
            </div>
            @endforeach

            {{-- Pulsante --}}
        </div>
        <button class="mb-5 btn btn-lg btn-warning">
            <a href="{{route('comics.create')}}">
                Passa alla form
            </a>

        </button>

    </div>

@endsection