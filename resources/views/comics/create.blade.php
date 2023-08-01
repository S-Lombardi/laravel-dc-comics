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
                        <input type="text"class="form-control" id="serie" name="serie" placeholder="Serie">
                    </div>
                    {{-- PREZZO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" class="form-control"id="prezzo" name="prezzo" placeholder="Prezzo">
                    </div>
                    {{-- TIPO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Tipo</label>
                        <input type="text"class="form-control" id="tipo" name="tipo" placeholder="Tipo">
                    </div>
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button type="submit"class="form-control" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection