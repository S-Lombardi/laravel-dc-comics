@extends ('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mt-5">
                    <img class="img-fluid card-img-top" src="{{$comic->thumb}}" alt="{{$comic->thumb}}">
                    <h3> {{$comic->title}}</h3>
                </div>

            </div>

            @endforeach
        </div>

    </div>

@endsection