@extends ('layouts.app')

{{-- DETTAGLI PRODOTTO --}}
@section('content')
    <div class="container">
        <div class="row">
           <div class="col">
                <img src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">

                <h3>{{$comic->title}}</h3>

                <p>{{$comic->description}}</p>

                <div>prezzo: {{$comic->price}}</div>

                <div>{{$comic->type}}</div>
            </div>
        </div>
    </div>

@endsection