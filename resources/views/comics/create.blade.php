@extends ('layouts.app')

{{-- FORM --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">
                            TITOLO
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">
                            Serie
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </label>
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label">
                            Prezzo
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </label>
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label">
                            tipo
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </label>
                    </div>

                    <div class="form-group">
                        
                    </div>


                    
                </form>
            </div>
        </div>

    </div>

@endsection