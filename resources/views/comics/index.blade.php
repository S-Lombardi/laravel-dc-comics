@extends ('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{route('comics.show', $comic->id)}}">
                    <div class="card mt-5">
                        <img class="img-fluid card-img-top" src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">
                        <h3> {{$comic->title}}</h3>

                    </div>
                </a>

            </div>
            @endforeach
        </div>

    </div>

@endsection