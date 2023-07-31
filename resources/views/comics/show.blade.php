@extends ('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
           <div class="col">
                <img src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">

                <h3>{{$comic->title}}</h3>
                
           </div>
        </div>
    </div>

@endsection