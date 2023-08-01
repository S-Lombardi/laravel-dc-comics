@extends ('layouts.app')

{{-- FORM --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="titolo">
                    </div>
                    {{-- SERIE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Serie</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="Serie">
                    </div>
                    {{-- PREZZO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" class="form-control"id="title" name="title" placeholder="Prezzo">
                    </div>
                    {{-- TIPO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Tipo</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="Tipo">
                    </div>
                </form>
            </div>
            {{-- PULSANTE --}}
            <div class="form-group">
                <button type="submit"class="form-control" class="btn btn-success">Salva</button>
            </div>
        </div>

    </div>

@endsection