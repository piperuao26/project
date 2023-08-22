@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Formulario</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('specification.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Especificacion" name="int" value="{{ old('int') }}" />
              <input type="text" class="form-control mb-2" placeholder="Ram" name="Ram" value="{{ old('Ram') }}" />
              <input type="text" class="form-control mb-2" placeholder="CPU" name="CPU" value="{{ old('CPU') }}" />
              <input type="text" class="form-control mb-2" placeholder="DiscoDuro" name="fecha" value="{{ old('DiscoDuro') }}" />
              <input type="text" class="form-control mb-2" placeholder="TarjetaGrafica" name="CPU" value="{{ old('Tarjeta') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
 